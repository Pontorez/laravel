<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    public static function getAllCategories()
    {
        $result = [];
        $categories = \App\Models\Category::all(['id', 'title'])->toArray();
        foreach ($categories as $category) {
            $categoryId = $category['id'];
            $result[$categoryId] = $category['title'];
        }
        return $result;
    }
}
