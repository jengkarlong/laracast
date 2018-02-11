<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    function add(Request $request, $task_id) {
    	$comment = new Comment();
    	$comment->content = $request->content;
    	$comment->user_id = Auth::user()->id;
    	$comment->task_id = $task_id;
    	$comment->save();

    	return redirect('/'); 
    }
}
