<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\ControllerBase;

use App\Comment;

class CommentController extends ControllerBase 
{
    public function index() {
        $comments = Comment::all();
        $items = [];
        foreach ($comments as $comment) {
            $items[] = Comment::find($comment->id);
        }

        return view('admin/comment/index')->withComments($items);
    }
}
