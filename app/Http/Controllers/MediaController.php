<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::select()
           ->orderBy('created_at')
           ->paginate(10);

        return view('media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048|mimes:pdf,zip,doc,docx,rtf,txt,jpg,png,svg'
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = $file->store('uploads', 'public');
        $fileSize = $file->getSize();

        $uploadedFile = new Media;
        $uploadedFile->name = $fileName;
        $uploadedFile->path = $filePath;
        $uploadedFile->size = $fileSize;
        $uploadedFile->user_id = Auth::id();
        $uploadedFile->save();

        return redirect(route('media.create'))->withSuccess(trans("File uploaded with success."));
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        
        $media->delete();
        return redirect()->route('media.index')->withSuccess(trans('The file has been deleted with success.'));
    }
}
