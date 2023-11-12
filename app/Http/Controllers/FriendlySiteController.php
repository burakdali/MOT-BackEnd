<?php

namespace App\Http\Controllers;

use App\Models\FriendlySite;
use App\Http\Requests\StoreFriendlySiteRequest;
use App\Http\Requests\UpdateFriendlySiteRequest;

class FriendlySiteController extends Controller
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
     * @param  \App\Http\Requests\StoreFriendlySiteRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FriendlySite  $friendlySite
     * @return \Illuminate\Http\Response
     */
    public function show(FriendlySite $friendlySite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FriendlySite  $friendlySite
     * @return \Illuminate\Http\Response
     */
    public function edit(FriendlySite $friendlySite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendlySiteRequest  $request
     * @param  \App\Models\FriendlySite  $friendlySite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFriendlySiteRequest $request, FriendlySite $friendlySite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FriendlySite  $friendlySite
     * @return \Illuminate\Http\Response
     */
    public function destroy(FriendlySite $friendlySite)
    {
        //
    }
}
