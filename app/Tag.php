<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    /**
     * Fillable fields for a tag
     * @var array
     */
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

    /**
     * Get the news items associated with the tag
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function newsItems() {
        return $this->belongsToMany('App\News', 'news_tags', 'tag_id', 'news_id');
    }
}
