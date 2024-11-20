<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');

        if (count($pots)>0) {
            $headline = $posts->shift();
        }else {
            $headline = null;
        }

        //news/index.blade.phpファイルを渡している
        //またViewテンプレートにheadline、posts、という変数を渡している
        return view('news.index',['headline' => $headline, 'posts' =>$posts]);
    }
}