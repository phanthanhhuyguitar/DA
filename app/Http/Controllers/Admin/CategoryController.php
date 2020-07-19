<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use cai model tuong ung de su dung den db
use App\Model\Categories;
use App\Http\Requests\StoreCategoryPost;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function getList()
    {
        $cate = Categories::all();
        return view('admin.category.list',['caTe'=>$cate]);
    }

    public function getAdd()
    {
        return view('admin.category.add');
    }

    public function getEdit($id)
    {
        $cate = Categories::find($id);
        return view('admin.category.edit',['cate' => $cate]);
    }

    public function postEdit(Request $request, $id)
    {
        $cate = Categories::find($id);
    }

    //form gui len phai nhan du lieu Request
    public function postAdd(Request $request)
    {
//        //ta phai validate de check nguoi dung co nhap khong
        $this->validate($request,
            [
                'cateName' => 'required|min:3|max:100'
            ],
            [
                'cateName.required' => 'Ban chua nhap ten the loai',
                'cateName.min' => 'Ten the loai toi thieu 3 ki tu tro len',
                'cateName.max' => 'Ten the loai toi da 100 ky tu ',
            ]
        );
        $cate = new Categories;
        $cate -> Ten = $request->cateName;
        $cate -> TenKhongDau = changeTitle($request->cateName);
        $cate -> save();

        return redirect(route('admin.category.add'))->with('thongbao','Them thanh cong');
    }
}
