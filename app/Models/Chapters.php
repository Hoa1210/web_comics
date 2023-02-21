<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class Chapters extends Model
{
    use HasFactory;

    protected $table = "chapters";
    protected $fillable = [
        'name',
        'slug',
        'comic_id',
        'created_at',
        'updated_at',
    ];

    public $timestamps = true;

    public function images(){
        return $this->hasMany(Images::class, 'chapter_id');
    }

    public function uploadImage($request)
    {
        foreach ($request->img_path as $value) {
            $name = $value->getClientOriginalName();
            $path = Storage::putFileAs('public/' . $request->comic_id . '/' . $request->slug . '', $value, $name, 'public');
        }
    }

    public function extractFile($path, $comic_id, $chapter_id)
    {
        $zip = new ZipArchive;

        $res = $zip->open(storage_path('app/' . $path));
        // dd($path);
        if ($res === TRUE) {
            // Giải nén file vào thư mục đích
            $zip->extractTo(storage_path('app/public/' . $comic_id . '/' . $chapter_id));
            $zip->close();


            $directory = storage_path('app/public/' . $comic_id . '/' . $chapter_id);
            $files = scandir($directory);
            foreach ($files as $file) {
                if ($file != '.' && $file != '..') {
                     $saveImg = Images::create([
                        'name' => $file,
                        'path' => 'public/' . $comic_id . '/' . $chapter_id .'/'.$file,
                        'chapter_id' => $chapter_id,
                     ]);

                     if($saveImg){
                        return true;
                     }
                    
                }
            }
        } else {
            return false;
        }
    }

    public function createChapter($request)
    {
        // dd($request->toArray());
        $createChapter = Chapters::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'comic_id' => $request->comic_id
        ]);
        if ($request->hasFile('file_compression')) {
            $file = $request->file('file_compression');
            $path = Storage::putFile('public/compression', $file, 'public');
            if ($request->method_upload == "compression") {
                $upload = $this->extractFile($path, $request->comic_id, $createChapter->id);
                if($upload){
                    echo "<script>alert('upload thành công')</script>";
                }
            }
        } 
    }
}