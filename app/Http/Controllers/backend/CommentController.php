<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('id','desc')->get();

        return view('backend.comment.index', [
            'comments' => $comments,
        ]);
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect()->route('comments.index');
    }
}
