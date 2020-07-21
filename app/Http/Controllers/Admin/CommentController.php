<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Categories;
use App\Model\TypeNews;
use Illuminate\Http\Request;
use App\Model\Comment;

class CommentController extends Controller
{

    public function getDelete($id,$idNews)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return redirect(route('admin.news.edit',$idNews))->with('thongbao','Xoa comment thanh cong');
    }
}
