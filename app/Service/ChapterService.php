<?php
namespace App\Service;

use App\Models\Chapters;
use App\Models\Images;

class ChapterService
{
    protected $fileService;
    protected $chapters;
    protected $images;
    public function __construct(FileService $fileService, Chapters $chapters, Images $images)
    {
        $this->fileService = $fileService;
        $this->chapters = $chapters;
        $this->images = $images;
    }

    public function createChapter($request)
    {

        $createChapter = $this->chapters->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'comic_id' => $request->comic_id
        ]);

        if ($request->hasFile('file_compression')) {
            $file = $request->file('file_compression');
            $path = $this->fileService->uploadFileZip($file);

            $comic_id = $request->comic_id;
            $chapter_id = $createChapter->id;
            $path_save = $comic_id .'/'.$chapter_id;

            $extracs = $this->fileService->extractFile($path, $path_save);
            if (is_array($extracs)) {
                foreach ($extracs as $file) {
                    if ($file != '.' && $file != '..') {
                         $this->images->create([
                            'name' => $file,
                            'path' => 'public/' . $path_save . '/' . $file,
                            'chapter_id' => $chapter_id,
                        ]);
                    }
                }
            }

        }
        return 1;
    }
}