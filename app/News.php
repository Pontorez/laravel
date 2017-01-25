<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $fillable = [
        'title',
        'body',
        'category_id',
        'created_at',
    ];

    public function setCreatedAtAttribute($date) {
        $this->attributes['created_at'] = Carbon::parse($date);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * Get the tags associated with news item
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {
        return $this->belongsToMany('App\Tag', 'news_tags', 'news_id', 'tag_id');
    }
}
