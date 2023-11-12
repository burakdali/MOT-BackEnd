<?php

namespace App\Http\Controllers;

use App\Models\FriendlySite;
use App\Http\Requests\StoreFriendlySiteRequest;
use App\Http\Requests\UpdateFriendlySiteRequest;
use App\Http\Resources\RelatedSiteResource;

class FriendlySiteController extends Controller
{

    public function index()
    {
    }

    function getAllFriendlySite()
    {
        $friendly = FriendlySite::all();
        foreach ($friendly as $friend) {
            $friend->nameAR = $friend->translate('ar')->name;
            $friend->nameEN = $friend->translate('en')->name;
        }
        return RelatedSiteResource::collection($friendly);
    }

    public function create()
    {
        //
    }


    public function store(StoreFriendlySiteRequest $request)
    {
        $StoreFriendlySite=NEW FriendlySite;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $StoreFriendlySite->fill([
            'link'  => $request->get('link'),
            'image' => $imageName,
            'ar'=>['name'=>$request->get('ar')['name']],
            'en'=>['name'=>$request->get('en')['name']],
        ]);
        $StoreFriendlySite->save();
        return redirect()->route('Friendly_Site.index');
    }

    public function show(FriendlySite $friendlySite)
    {
        //
    }


    public function edit(FriendlySite $friendlySite)
    {
        //
    }


    public function update(UpdateFriendlySiteRequest $request, FriendlySite $friendlySite)
    {
        //
    }


    public function destroy(FriendlySite $friendlySite)
    {
        //
    }
}
