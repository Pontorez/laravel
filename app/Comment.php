<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['author', 'body'];

    public function newsItem() {
        return $this->belongsTo(News::class, 'news_id');
    }
}
