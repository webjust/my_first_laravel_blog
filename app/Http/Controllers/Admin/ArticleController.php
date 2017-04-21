<?php

namespace App\Http\Controllers\Admin;
use App\Models\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin/article/index')->withArticles(Article::all());
    }
}
