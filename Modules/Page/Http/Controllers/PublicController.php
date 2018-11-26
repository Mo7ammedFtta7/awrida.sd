<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Menu\Repositories\MenuItemRepository;
use Modules\Page\Entities\Page;
use Modules\Page\Repositories\PageRepository;
use Modules\Setting\Contracts\Setting;
use Modules\Blog\Repositories\PostRepository;



class PublicController extends BasePublicController
{
    /**
     * @var PageRepository
     */
    private $page;
    /**
     * @var Application
     */
    private $app;

    private $disabledPage = false;

    public function __construct(PageRepository $page, Application $app,PostRepository $post)
    {
        parent::__construct();
        $this->page = $page;
        $this->app = $app;
        $this->post = $post;

    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function uri($slug)
    {
        $page = $this->findPageForSlug($slug);

        $this->throw404IfNotFound($page);

        $currentTranslatedPage = $page->getTranslation(locale());
        if ($slug !== $currentTranslatedPage->slug) {

            return redirect()->to($currentTranslatedPage->locale . '/' . $currentTranslatedPage->slug, 301);
        }

        $template = $this->getTemplateForPage($page);

        $alternate = $this->getAlternateMetaData($page);
        //dd('kkjlkjlk');
        $latestPosts= $this->post->latest(5);

        return view($template, compact('page', 'alternate','latestPosts'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function homepage()
    {
        $limit = $this->setting->get('blog::latest-posts-amount', locale(), 5);

        $page = $this->page->findHomepage();

        $this->throw404IfNotFound($page);

        $template = $this->getTemplateForPage($page);

        $alternate = $this->getAlternateMetaData($page);
        $latestPosts= $this->post->latest(5);
//dd($latestPosts);
        return view($template, compact('page', 'alternate','latestPosts'));
    }

    /**
     * Find a page for the given slug.
     * The slug can be a 'composed' slug via the Menu
     * @param string $slug
     * @return Page
     */
    private function findPageForSlug($slug)
    {
        $menuItem = app(MenuItemRepository::class)->findByUriInLanguage($slug, locale());

        if ($menuItem) {
            return $this->page->find($menuItem->page_id);
        }

        return $this->page->findBySlug($slug);
    }

    /**
     * Return the template for the given page
     * or the default template if none found
     * @param $page
     * @return string
     */
    private function getTemplateForPage($page)
    {
        return (view()->exists($page->template)) ? $page->template : 'default';
    }

    /**
     * Throw a 404 error page if the given page is not found or draft
     * @param $page
     */
    private function throw404IfNotFound($page)
    {
        if (null === $page || $page->status === $this->disabledPage) {
            $this->app->abort('404');
        }
    }

    /**
     * Create a key=>value array for alternate links
     *
     * @param $page
     *
     * @return array
     */
    private function getAlternateMetaData($page)
    {
        $translations = $page->getTranslationsArray();

        $alternate = [];
        foreach ($translations as $locale => $data) {
            $alternate[$locale] = $data['slug'];
        }

        return $alternate;
    }
}
