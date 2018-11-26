<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class CategoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'slug'];
    protected $table = 'blog__category_translations';

    public function scopeGetCategoryByName($name)
    {
        $category = CategoryTranslation::where('slug', $name)->where('local',App::getLocale())->first();
        // dd($category);
         return $category;
         

    }

    public function scopeGetAll()
    {
        $category = CategoryTranslation::all();
        // dd($category);
         return $category;
         
    }
}
