<?php

namespace App\Http\Controllers;

use App\Models\MediaCenter;
use App\Http\Requests\StoreMediaCenterRequest;
use App\Http\Requests\UpdateMediaCenterRequest;
use App\Http\Resources\MediaCenterResource;

class MediaCenterController extends Controller
{

    public function index()
    {
    }
    function getAllMediaCenter()
    {
        $mediaCenters = MediaCenter::all();
        foreach ($mediaCenters as $media) {
            $media->titleAR = $media->translate('ar')->title;
            $media->titleEN = $media->translate('en')->title;
            $media->contentAR = $media->translate('ar')->content;
            $media->contentEN = $media->translate('en')->content;
        }
        return MediaCenterResource::collection($mediaCenters);
    }

    public function create()
    {
        //
    }


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

    public function show(MediaCenter $mediaCenter)
    {
        //
    }


    public function edit(MediaCenter $mediaCenter)
    {
        //
    }


    public function update(UpdateMediaCenterRequest $request, MediaCenter $mediaCenter)
    {
        //
    }


    public function destroy(MediaCenter $mediaCenter)
    {
        //
    }
}
