<?php

use Illuminate\Routing\Router;

/** @var Router $router */
$router->group(['prefix' => 'blog'], function (Router $router) {
    $locale = LaravelLocalization::setLocale() ?: App::getLocale();
    $router->get('posts', [
        'as' => $locale . '.blog',
        'uses' => 'PublicController@index',
        'middleware' => config('asgard.blog.config.middleware'),
    ]);
    $router->get('{cat?}/posts', [
        'as' => $locale . '.blog',
        'uses' => 'PublicController@index',
        'middleware' => config('asgard.blog.config.middleware'),
    ]);
    $router->get('/clear-cache',function() {
        $exitCode1 = Artisan::call('cache:clear');
         $exitCode2 = Artisan::call('optimize');

        // $exitCode3 = Artisan::call('route:cache');
        $exitCode4 = Artisan::call('view:clear');
        $exitCode5 = Artisan::call('config:cache');

        

        return "done!";
    });
    $router->get('posts/{slug}', [
        'as' => $locale . '.blog.slug',
        'uses' => 'PublicController@show',
        'middleware' => config('asgard.blog.config.middleware'),
    ]);
});
