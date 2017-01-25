<?php

namespace App\Http\Controllers;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create() {
        return view('category.create');
    }

    public function destroy(Category $category) {
        $category->delete();
        return back();
    }

    public function store(CategoryRequest $request) {
        Category::create($request->all());
        return redirect('/category');
    }

    public function update(CategoryRequest $request, Category $category) {
        $category->update($request->all());
        return redirect('/category');
    }

    public function edit(Category $category) {
        return view('category.edit', compact('category'));
    }

}
