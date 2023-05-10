<?php 
namespace App\Service;

use App\Models\Comments;

class CommentService {
    private $comment;
    public function __construct(Comments $comment){
        $this->comment = $comment;
    }

    public function getCommentByComic($comic_id){
        return $this->comment->where("comic_id", $comic_id)->orderBy("created_at", "desc")->with(['user'])->get();
        
    }
    public function insertComment($request){
        $comment = $this->comment->create([
            'content' => $request->message,
            'user_id'  => $request->user_id,
            'comic_id'  => $request->comic_id,
            'chapter_id' => NULL,
            'parent_id' => NULL, 
        ]);
        
        return $this->comment->where("id",$comment->id)->with(['user'])->first();
    }
    
}