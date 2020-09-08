<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public static function getAllTags() {
        $result = [];
        $tags = Tag::all(['id', 'name'])->toArray();
        foreach ($tags as $tag) {
            $tagId = $tag['id'];
            $result[$tagId] = $tag['name'];
        }
        return $result;
    }

    public function newsItems() {
        return $this->belongsToMany('App\News', 'news_tags', 'tag_id', 'news_id');
    }
}
