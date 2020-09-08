<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect("/news/{$newsItem->id}#comments");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
