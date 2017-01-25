<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests\NewsRequest;
use App\News;
use App\Tag;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view('news.index', compact('news'));
    }

    public function edit(News $news) {
        $tags = $news->tags->pluck('id')->toArray();
        $allTags = Tag::getAllTags();
        $categories = Category::getAllCategories();
        return view('news.edit', compact('news', 'categories', 'tags', 'allTags'));
    }

    public function show(News $news) {
        return view('news.show', compact('news'));
    }

    public function destroy(News $news) {
        $news->delete();
        return redirect('/');
    }

    public function create() {
        $tags = Tag::getAllTags();
        $allTags = Tag::getAllTags();
        $categories = Category::getAllCategories();
        return view('news.create', compact(['tags', 'categories', 'news', 'allTags']));
    }

    public function store(NewsRequest $request) {
        $newsItem = News::create($request->all());
        $newsItem->tags()->attach($request->input('tags'));
        return redirect('/');
    }

    public function update(NewsRequest $request, News $news) {
        $news->update($request->all());
        $news->tags()->detach();
        $news->tags()->attach($request->input('tags'));
        return redirect('/');
    }

}
