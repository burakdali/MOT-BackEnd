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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FriendlySiteTranslation  $friendlySiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
