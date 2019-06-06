<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index ()
    {
        $news = News::paginate(5);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::with('user')->findOrFail($id);
        \Log::info($news);

        return view('news.show', compact('news'));
    }
}
