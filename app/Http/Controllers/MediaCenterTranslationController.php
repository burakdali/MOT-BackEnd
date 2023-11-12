<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaCenterTranslationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $MediaTranslation=MediaCenterTranslation::all();
        return view('media_center.media_center',compact('MediaTranslation'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $media_center= MediaCenterTranslation::all();
        return view('media_center.create_media',compact('media_center'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaCenterTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaCenterTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaCenterTranslation  $mediaCenterTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(MediaCenterTranslation $mediaCenterTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaCenterTranslation  $mediaCenterTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $MediaTranslation=MediaCenterTranslation::find($id);
        return view('media_center.edit_media', compact('MediaTranslation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaCenterTranslationRequest  $request
     * @param  \App\Models\MediaCenterTranslation  $mediaCenterTranslation
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request ,$id)
    {
        $MediaTranslation=MediaCenterTranslation::find($id);
        $MediaTranslation->update($request->all());
        return redirect()->route('media_center.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaCenterTranslation  $mediaCenterTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $MediaTranslation=MediaCenterTranslation::find($id);
        $MediaTranslation->delete();
        return redirect()->route('media_center.index');
    }

}
