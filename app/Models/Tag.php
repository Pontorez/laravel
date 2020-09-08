<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public static function getAllTags()
    {
        $result = [];
        $tags = \App\Models\Tag::all(['id', 'name'])->toArray();
        foreach ($tags as $tag) {
            $tagId = $tag['id'];
            $result[$tagId] = $tag['name'];
        }
        return $result;
    }

    public function newsItems()
    {
        return $this->belongsToMany(News::class, 'news_tags', 'tag_id', 'news_id');
    }
}
