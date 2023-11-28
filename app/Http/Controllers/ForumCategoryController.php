<?php

namespace App\Http\Controllers;
use App\Models\ForumCategory;
use Illuminate\Http\Request;

class ForumCategoryController extends Controller
{
    public function index()
    {
        $categories = ForumCategory::orderBy('created_at', 'desc')->paginate(10);
        return view('forum.categories.index', compact('categories'));
    }

    public function show(ForumCategory $category)
    {
        $threads = $category->threads()->orderBy('created_at', 'desc')->paginate(10);
        return view('forum.categories.show', compact('category', 'threads'));
    }
}
