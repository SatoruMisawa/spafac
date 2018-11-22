<?php

namespace App\Service;

use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Storage;

class ImageStorage {
    public function store($file) {
        $fileName = Storage::disk('local')->putFile('public', $file);
        return str_replace('public', 'storage', $fileName);
    }
}