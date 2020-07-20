<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Categories;
use App\Model\TypeNews;
use App\Model\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getList()
    {
        $news = News::orderBy('id','DESC')
                    ->get();
        return view('admin.news.list',['new'=>$news]);
    }

    public function getAdd()
    {
        //show trang them tin tuc
        $cate = Categories::all();
        $type = TypeNews::all();
        return view('admin.news.add',['caTe'=>$cate,'tyPe'=>$type]);
    }


    public function postAdd(Request $request)
    {

    }

    public function getEdit($id)
    {

    }

    public function postEdit(Request $request, $id)
    {

    }

    public function getDelete($id)
    {

    }


}
