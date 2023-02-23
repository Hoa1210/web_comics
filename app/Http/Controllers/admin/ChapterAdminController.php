<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use App\Service\ChapterService;
use Illuminate\Http\Request;

class ChapterAdminController extends Controller
{
    protected $chapters;
    public function __construct(ChapterService $chapters){
        $this->chapters = $chapters;
    }
    public function create(){
        $comics = Comics::where('is_public',1)->get();
        // dd($comics->toArray());
        return view('admin.pages.comics.chapter-create',compact('comics'));
    }

    public function store(Request $request){
        $create = $this->chapters->createChapter($request);
        return redirect(route('admin.chapter.create'));
    }
}
