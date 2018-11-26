<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Support\Facades\App;
use Modules\Blog\Repositories\PostRepository;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\Blog\Entities as db; 

class PublicController extends BasePublicController
{
    /**
     * @var PostRepository
     */
    private $post;

    public function __construct(PostRepository $post)
    {
        parent::__construct();
        $this->post = $post;
    }

    public function index($cat=null)
    {
        if (!$cat) {
            $posts = $this->post->allTranslatedIn(App::getLocale());
        } else {
           $all= db\CategoryTranslation::GetAll($cat);
           
           $fil=$all->where('locale',App::getLocale())->where('slug',$cat)->first();
            if (!$fil) {
                $posts = $this->post->allTranslatedIn(App::getLocale());

            }else {
                $posts = $this->post->allTranslatedIn(App::getLocale())->where('category_id',$fil->category_id);
            }
        }
        
       // $posts = $this->post->allTranslatedIn(App::getLocale());
        //dd($posts);
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = $this->post->findBySlug($slug);

        return view('blog.show', compact('post'));
    }
}
