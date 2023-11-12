<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatedSiteTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RelatedSite=RelatedSiteTranslation::all();
        return view('Minister.Related_Site',compact('RelatedSite'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $RelatedSite= RelatedSiteTranslation::all();
        return view('Minister.createRelatedSite',compact('RelatedSite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRelatedSiteTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRelatedSiteTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RelatedSiteTranslation  $relatedSiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(RelatedSiteTranslation $relatedSiteTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RelatedSiteTranslation  $relatedSiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $RelatedSite=RelatedSiteTranslation::find($id);
        return view('Minister.edit_related_site', compact('RelatedSite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRelatedSiteTranslationRequest  $request
     * @param  \App\Models\RelatedSiteTranslation  $relatedSiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request ,$id)
    {
        $RelatedSite=RelatedSiteTranslation::find($id);
        $RelatedSite->update($request->all());
        return redirect()->route('Related_Site.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RelatedSiteTranslation  $relatedSiteTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $RelatedSite=RelatedSiteTranslation::find($id);
        $RelatedSite->delete();
        return redirect()->route('Related_Site.index');
    }

}
