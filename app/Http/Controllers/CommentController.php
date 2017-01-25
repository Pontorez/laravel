<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, News $newsItem) {

        $this->validate($request, [
            'body' => 'required|min:2',
            'author' => 'required',
        ]);
        $newsItem = News::find($request->news_id);

        $newsItem->comments()->create([
            'body' => $request->body,
            'author' => $request->author,
            'news_id' => $request->news_id,
        ]);

        return redirect('/news/' . $newsItem->id . '#comments');

    }

    public function destroy(Comment $comment) {
        $comment->delete();
        return back();
    }

    public function update(CommentRequest $request, Comment $comment) {

        $comment->update($request->all());
        return redirect('/news/' . $comment->news_id . '#comments');
    }

}
