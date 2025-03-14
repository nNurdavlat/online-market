<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('file-upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $name, 'public');
        FileUpload::create(['path' => $filePath]);

        return redirect()->back()->with('success', 'Fayl yuklandi!');
    }


    public function show()
    {
        $images = FileUpload::all();
        return view('/files', compact('images'));

    }
}
