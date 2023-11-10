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
        //
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
