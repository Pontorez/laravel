<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

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

    public function store(Request $request) {
        Category::create($request->all());
        return redirect('/category');
    }

    public function update(Request $request, Category $category) {
        $category->update($request->all());
        return redirect('/category');
    }

    public function edit(Category $category) {
        return view('category.edit', compact('category'));
    }

}
