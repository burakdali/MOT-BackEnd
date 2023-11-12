<?php

namespace App\Http\Controllers;

use App\Models\CriteriaTranslation;
use App\Models\Criteria;
use App\Http\Requests\StoreCriteriaTranslationRequest;
use App\Http\Requests\UpdateCriteriaTranslationRequest;

class FriendlySiteTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $FriendlySite = FriendlySiteTranslation::all();
        return view('Minister.Friendly_Site', compact('FriendlySite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $FriendlySite = FriendlySiteTranslation::all();
        return view('Minister.create_Freindly_site', compact('FriendlySite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFriendlySiteTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendlySiteTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FriendlySiteTranslation  $friendlySiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(FriendlySiteTranslation $friendlySiteTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FriendlySiteTranslation  $friendlySiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $FriendlySite = FriendlySiteTranslation::find($id);
        return view('Minister.edit_friendly_site', compact('FriendlySite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendlySiteTranslationRequest  $request
     * @param  \App\Models\FriendlySiteTranslation  $friendlySiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $FriendlySite = FriendlySiteTranslation::find($id);
        $FriendlySite->update($request->all());
        return redirect()->route('Friendly_Site.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FriendlySiteTranslation  $friendlySiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $FriendlySite = FriendlySiteTranslation::find($id);
        $FriendlySite->delete();
        return redirect()->route('Friendly_Site.index');
    }
}
