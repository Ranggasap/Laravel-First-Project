<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', [
            "title" => 'Post Categories',
            "active" => "category",
            'categories' => Category::all()]);
    }

    // public function show( Category $category) {
    //     return view('galery', [
    //         "title" => "Post by Category : $category->name", 
    //         "active" => "category",
    //         "posts" => $category->posts->load(['category', 'user']), 
            
    //     ]);
    // }
}
