<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Slider;
use App\Model\TypeNews;
use App\Model\News;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //ham do du lieu ra view
    public function __construct()
    {
        $cate = Categories::all();
        $slide = Slider::all();
        view()->share('cate',$cate);
        view()->share('slide',$slide);

        if(Auth::check()){
            view()->share('customer', Auth::user());//tra ve doi tuong nguoi dung dang nhap truyen sang bien nguoi dung
        }
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

    public function getLogin()
    {
        return view('page.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'pass' => 'required|min:3|max:32'
        ],
            [
                'email.required' => 'Ban chua nhap Email',
                'pass.required' => 'Ban chua nhap mat khau',
                'pass.min' => 'Mat khau phai it nhat 3 ki tu',
                'pass.max' => 'Mat khau phai toi da 32 ki tu',

            ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->pass])) {
            $user = User::whereemail($request->email)->first();
            Auth::login($user);
            return redirect(route('home'));
        } else{
            return redirect(route('user-login'))->with('thongbao','Email or Password khong chinh xac');
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect(route('home'));
    }

    public function getUser()
    {
        return view('page.user');
    }

    public function postUser()
    {

    }
}
