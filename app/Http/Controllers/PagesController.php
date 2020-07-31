<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Slider;
use App\Model\TypeNews;
use App\Model\News;

class PagesController extends Controller
{
    //ham do du lieu ra view
    public function __construct()
    {
        $cate = Categories::all();
        $slide = Slider::all();
        view()->share('cate',$cate);
        view()->share('slide',$slide);
    }

    public function home()
    {
        return view('page.home');
    }

    public function blog()
    {
        return view('page.blog');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function typeNews($id)
    {
        $type = TypeNews::find($id);
        $new = News::where('idLoaiTin', $id)->paginate(6);
        return view('page.type_news', ['tyPe'=>$type, 'news'=>$new]);
    }

    public function new($id)
    {
        $new = News::find($id);
        $recentPost = News::where('NoiBat', 0)->orderBy('created_at', 'desc')->take(4)->get();
        return view('page.latest_news', ['news'=>$new, 'recent'=>$recentPost]);
    }

    public function about()
    {
        return view('page.about');
    }

    public function category($id)
    {
        $cate = Categories::find($id);
        return view('page.category', ['caTe'=>$cate]);
    }
}
