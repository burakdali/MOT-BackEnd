<?php

namespace App\Http\Controllers;

use App\Models\RelatedSite;
use App\Http\Requests\StoreRelatedSiteRequest;
use App\Http\Requests\UpdateRelatedSiteRequest;

class RelatedSiteController extends Controller
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
     * @param  \App\Http\Requests\StoreRelatedSiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRelatedSiteRequest $request)
    {
        $StoreRelatedSite=NEW RelatedSite;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $StoreRelatedSite->fill([
            'link'  => $request->get('link'),
            'image' => $imageName,
            'ar'=>['name'=>$request->get('ar')['name']],
            'en'=>['name'=>$request->get('en')['name']],
        ]);
        $StoreRelatedSite->save();
        return redirect()->route('Related_Site.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RelatedSite  $relatedSite
     * @return \Illuminate\Http\Response
     */
    public function show(RelatedSite $relatedSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RelatedSite  $relatedSite
     * @return \Illuminate\Http\Response
     */
    public function edit(RelatedSite $relatedSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRelatedSiteRequest  $request
     * @param  \App\Models\RelatedSite  $relatedSite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRelatedSiteRequest $request, RelatedSite $relatedSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RelatedSite  $relatedSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(RelatedSite $relatedSite)
    {
        //
    }
}
