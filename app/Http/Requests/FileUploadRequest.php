<?php

namespace App\Http\Requests;

use App\Rules\StorageFileExists;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class FileUploadRequest extends FormRequest
{
    public function rules()
    {
        return [
            'file' => ['required', new StorageFileExists(), 'mimetypes:application/octet-stream,image/jpeg,video/mp4'],
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'A file is required for uploading.',
            'file.mimes' => 'Please upload gltf file or glb.',
        ];
    }
}
