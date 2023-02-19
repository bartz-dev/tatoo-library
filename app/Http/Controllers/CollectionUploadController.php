<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilesUploadRequest;
use App\Http\Requests\FileUploadRequest;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionUploadController extends Controller
{
    public function filesUpload(FilesUploadRequest $req) {
        $fileModel = new Collection();
        if($req->file('collection_preview') && $req->file('scan')) {
            $fileName = $req->collection_preview->getClientOriginalName();
            $fileNameWithoutExtension = pathinfo($req->collection_preview->getClientOriginalName(), PATHINFO_FILENAME);
            $scanExtension = pathinfo($req->scan->getClientOriginalName(), PATHINFO_EXTENSION);

            $filePath = $req->file('collection_preview')->storeAs('', $fileName, 'data');
            $scan = $req->file('scan')->storeAs('', $fileNameWithoutExtension.'.'.$scanExtension, 'data');

            return 'file uploaded';
        }
        return 'error';
    }
}
