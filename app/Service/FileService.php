<?php
namespace App\Service;

use Illuminate\Support\Facades\Storage;
use ZipArchive;

class FileService
{
    public function uploadFileZip($file)
    {
        $path = Storage::putFile('public/compression', $file, 'public');
        return $path;
    }
    public function uploadFile($file, $path_save)
    {
        $name = $file->getClientOriginalName();
        $path = Storage::putFileAs('public/' . $path_save, $file, $name, 'public');
        return $path;
    }

    public function extractFile($path, $path_save)
    {
        $zip = new ZipArchive;

        $res = $zip->open(storage_path('app/' . $path));
        if ($res === TRUE) {
            // Giải nén file vào thư mục đích
            $zip->extractTo(storage_path('app/public/' . $path_save));
            $zip->close();
            $directory = storage_path('app/public/' . $path_save);
            $folder = scandir($directory);
            $files = scandir($directory . '/' . $folder[2]);
            return [$folder, $files];
        } else {
            return false;
        }
    }

    // copy image form backup forder to public images foder
    public function copyImagesFromBackup()
    {
        $source_directory = 'public/images';
        $destination_directory = 'backup/anime';

        if (Storage::exists($source_directory)) {
            Storage::copyDirectory($source_directory, $destination_directory);
            echo 'Thư mục đã được sao chép thành công.';
        } else {
            echo 'Không tìm thấy thư mục nguồn.';
        }
    }
}