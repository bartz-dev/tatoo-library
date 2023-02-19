<?php

namespace App\Http\Requests;

use App\Rules\StorageFileExists;
use Illuminate\Foundation\Http\FormRequest;

class FilesUploadRequest extends FormRequest
{
    public function rules()
    {
        return [
            'collection_preview' => ['required', new StorageFileExists(), 'mimetypes:video/mp4'],
            'scan' => ['required', new StorageFileExists(), 'mimetypes:application/octet-stream'],
        ];
    }

    public function messages()
    {
        return [
            'collection_preview.required' => 'A file is required for uploading.',
            'collection_preview.mimetypes' => 'Please upload gltf file or glb.',
            'scan.mimetypes' => 'Please upload gltf file or glb.',
            'scan.required' => 'A file is required for uploading.',
        ];
    }
}
