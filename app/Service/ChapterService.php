<?php
namespace App\Service;

use App\Models\Chapters;
use App\Models\Images;

class ChapterService
{
    protected $fileService;
    protected $chapters;
    protected $images;
    protected $comics;
    public function __construct(FileService $fileService, Chapters $chapters, Images $images, ComicService $comics)
    {
        $this->fileService = $fileService;
        $this->chapters = $chapters;
        $this->images = $images;
        $this->comics = $comics;
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
            $path_save = $comic_id . '/' . $chapter_id;

            $extracs = $this->fileService->extractFile($path, $path_save);
            if (is_array($extracs[1])) {
                foreach ($extracs[1] as $file) {
                    if ($file != '.' && $file != '..') {
                        $this->images->create([
                            'name' => $file,
                            'path' => 'public/' . $path_save . '/' . $extracs[0][2] . '/' . $file,
                            'chapter_id' => $chapter_id,
                        ]);
                    }
                }
            }

        }
        return 1;
    }

    public function getImageByChapterId($chapter_id)
    {
        return $this->images->where('chapter_id', $chapter_id)->get();
    }

    public function getChapterByComicId($comic_id)
    {
        return $this->comics->getComicById($comic_id)->chapters->toArray();
    }

    public function getCurrentChapter($slug, $comic_id)
    {
        return $this->chapters->where([
            'slug' => $slug,
            'comic_id' => $comic_id
        ])->first();
    }

}