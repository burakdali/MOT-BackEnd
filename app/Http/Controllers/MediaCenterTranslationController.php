<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaCenterTranslationRequest;
use App\Models\MediaCenterTranslation;
use Illuminate\Http\Request;

class MediaCenterTranslationController extends Controller
{


    public function index()
    {
        $MediaTranslation = MediaCenterTranslation::all();
        return view('media_center.media_center', compact('MediaTranslation'));
    }

    public function create()
    {
        $media_center = MediaCenterTranslation::all();
        return view('media_center.create_media', compact('media_center'));
    }


    public function store(StoreMediaCenterTranslationRequest $request)
    {
        //
    }


    public function show(MediaCenterTranslation $mediaCenterTranslation)
    {
        //
    }

    public function edit($id)
    {
        $MediaTranslation = MediaCenterTranslation::find($id);
        return view('media_center.edit_media', compact('MediaTranslation'));
    }


    public function update(Request $request, $id)
    {
        $MediaTranslation = MediaCenterTranslation::find($id);
        $MediaTranslation->update($request->all());
        return redirect()->route('media_center.index');
    }

    public function destroy($id)
    {
        $MediaTranslation = MediaCenterTranslation::find($id);
        $MediaTranslation->delete();
        return redirect()->route('media_center.index');
    }
}
