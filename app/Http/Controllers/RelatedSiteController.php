<?php

namespace App\Http\Controllers;

use App\Models\RelatedSite;
use App\Http\Requests\StoreRelatedSiteRequest;
use App\Http\Requests\UpdateRelatedSiteRequest;
use App\Http\Resources\RelatedSiteResource;

class RelatedSiteController extends Controller
{

    public function index()
    {
    }

    function getAllRelatedSite()
    {
        $related = RelatedSite::all();
        foreach ($related as $relate) {
            $relate->nameAR = $relate->translate('ar')->name;
            $relate->nameEN = $relate->translate('en')->name;
        }
        return RelatedSiteResource::collection($related);
    }
    public function create()
    {
        //
    }


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


    public function show(RelatedSite $relatedSite)
    {
        //
    }


    public function edit(RelatedSite $relatedSite)
    {
        //
    }


    public function update(UpdateRelatedSiteRequest $request, RelatedSite $relatedSite)
    {
        //
    }

    public function destroy(RelatedSite $relatedSite)
    {
        //
    }
}
