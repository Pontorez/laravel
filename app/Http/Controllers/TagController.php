<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;

use App\Tag;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function create() {
        return view('tag.create');
    }

    public function destroy(Tag $tag) {
        $tag->delete();
        return back();
    }

    public function store(TagRequest $request) {
        Tag::create($request->all());
        return redirect('/tag');
    }

    public function update(TagRequest $request, Tag $tag) {
        $tag->update($request->all());
        return redirect('/tag');
    }

    public function edit(Tag $tag) {
        return view('tag.edit', compact('tag'));
    }

    public function show($tag) {
        $selectedTag = Tag::where('name', '=', $tag)->first();
        $news = $selectedTag->newsItems;
        return view('news.index', compact('news'));
    }

}
