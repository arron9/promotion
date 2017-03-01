<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoCommentController extends Controller
{
    /**
     * 显示指定相片的评论。
     *
     * @param  int  $photoId
     * @param  int  $commentId
     * @return Response
     */
    public function show($photoId, $commentId)
    {
        echo 456;
    }

    public function get($photoId, $commentId) {
        echo 123;
    }
}
