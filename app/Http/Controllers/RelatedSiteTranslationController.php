<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRelatedSiteTranslationRequest;
use App\Models\RelatedSiteTranslation;
use Illuminate\Http\Request;

class RelatedSiteTranslationController extends Controller
{

    public function index()
    {
        $RelatedSite = RelatedSiteTranslation::all();
        return view('Minister.Related_Site', compact('RelatedSite'));
    }


    public function create()
    {
        $RelatedSite = RelatedSiteTranslation::all();
        return view('Minister.createRelatedSite', compact('RelatedSite'));
    }


    public function store(StoreRelatedSiteTranslationRequest $request)
    {
        //
    }


    public function show(RelatedSiteTranslation $relatedSiteTranslation)
    {
        //
    }


    public function edit($id)
    {
        $RelatedSite = RelatedSiteTranslation::find($id);
        return view('Minister.edit_related_site', compact('RelatedSite'));
    }


    public function update(Request $request, $id)
    {
        $RelatedSite = RelatedSiteTranslation::find($id);
        $RelatedSite->update($request->all());
        return redirect()->route('Related_Site.index');
    }


    public function destroy($id)
    {
        $RelatedSite = RelatedSiteTranslation::find($id);
        $RelatedSite->delete();
        return redirect()->route('Related_Site.index');
    }
}
