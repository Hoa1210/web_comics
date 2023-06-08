<?php
namespace App\Service;

use App\Models\Farvorites;
use App\Models\User;

class FarvoriteService {

    private $farvorite;
    private $user;

    public function __construct(Farvorites $farvorite, User $user){
        $this->farvorite = $farvorite;
        $this->user = $user;
    }

    public function createFarvorite($comic_id, $user_id){
        $check = $this->checkFarvorite($comic_id, $user_id);
        if($check){
            $delete =  $this->deleteFarvorite($check->id);
            if($delete){
                return 'delete';
            }
        }else{
            $create = $this->farvorite->create([
                "user_id" => $user_id,
                "comic_id" => $comic_id
            ]);
            if($create){
                return 'create';
            }
        }
    }

    public function checkFarvorite($comic_id, $user_id){
        return $this->farvorite->where([
            'user_id' => $user_id,
            'comic_id' => $comic_id,
        ])->first();
    }

    public function deleteFarvorite($id){
        return $this->farvorite->find($id)->delete();
    }

    public function getAllComicsFarvoriteByUserId($user_id){
        return $this->user->find($user_id)->comics;
    }
}