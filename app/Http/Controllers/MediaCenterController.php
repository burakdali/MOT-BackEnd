<?php

namespace App\Http\Controllers;

use App\Models\MediaCenter;
use App\Http\Requests\StoreMediaCenterRequest;
use App\Http\Requests\UpdateMediaCenterRequest;

class MediaCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMediaCenterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaCenterRequest $request)
    {
        $StoreMedia=NEW MediaCenter;
        $StoreMedia->fill([
            'ar'=>['title'=>$request->get('ar')['title'],
                    'content'=>$request->get('ar')['content']
                    ],
            'en'=>['title'=>$request->get('en')['title'],
                  'content'=>$request->get('en')['content']],
        ]);
        $StoreMedia->save();
        return redirect()->route('media_center.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaCenter  $mediaCenter
     * @return \Illuminate\Http\Response
     */
    public function show(MediaCenter $mediaCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaCenter  $mediaCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaCenter $mediaCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaCenterRequest  $request
     * @param  \App\Models\MediaCenter  $mediaCenter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaCenterRequest $request, MediaCenter $mediaCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaCenter  $mediaCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaCenter $mediaCenter)
    {
        //
    }
}
