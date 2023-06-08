<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Service\FarvoriteService;
use Illuminate\Http\Request;

class FarvoriteController extends Controller
{
    private $farvorite;

    public function __construct(FarvoriteService $farvorite){
        $this->farvorite = $farvorite;
    }
    public function index(){
        $user_id = auth()->user()->id;
        $comics = $this->farvorite->getAllComicsFarvoriteByUserId($user_id);
        // dd($comics);
        return view('client.pages.farvorites.index', compact('comics'));
    }
}
