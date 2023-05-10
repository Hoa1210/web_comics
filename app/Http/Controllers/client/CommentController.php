<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Service\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    private $comment;
    public function __construct(CommentService $comment){
        $this->comment = $comment;
    }
    public function comment(Request $request){
        $createComment = $this->comment->insertComment($request);
        return $createComment;
    }
}
