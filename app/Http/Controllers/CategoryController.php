<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return Category::all();
    }

    public function store(Request $request) {
        return Category::create($request->all());
    }

    public function update(Request $request, Category $category) {
        $category->update($request->all());
        return $category;
    }

    public function show(Category $category) {
        return $category;
    }

    public function destroy(Request $request, Category $category) {
        $category->delete();
        return $category;
    }
}
