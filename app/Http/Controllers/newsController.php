<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;

class newsController extends Controller
{
    //get news information
    public function news()
    {
        $news=News::where('category','note')->orderBy('created_at', 'desc')->paginate(10);

        $newsTitle='消息 NEWS';

        return view('front.news',compact('news','newsTitle'));
    }

    public function show($id)
    {
        $news=News::findorFail($id);

        return view('front.newsMore',compact('news'));
    }

    public function article()
    {
        $news=News::where('category','taichung')->orderBy('created_at', 'desc')->paginate(10);

        $newsTitle='深旅 ARTICLE';

        return view('front.news',compact('news','newsTitle'));
    }

}
