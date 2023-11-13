<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFriendlySiteTranslationRequest;
use App\Models\CriteriaTranslation;
use App\Models\Criteria;
use App\Http\Requests\StoreCriteriaTranslationRequest;
use App\Http\Requests\UpdateCriteriaTranslationRequest;
use App\Models\FriendlySiteTranslation;
use Illuminate\Http\Request;

class FriendlySiteTranslationController extends Controller
{

    public function index()
    {

        $FriendlySite = FriendlySiteTranslation::all();
        return view('Minister.Friendly_Site', compact('FriendlySite'));
    }

    public function create()
    {
        $FriendlySite = FriendlySiteTranslation::all();
        return view('Minister.create_Freindly_site', compact('FriendlySite'));
    }


    public function store(StoreFriendlySiteTranslationRequest $request)
    {
        //
    }

    public function show(FriendlySiteTranslation $friendlySiteTranslation)
    {
        //
    }


    public function edit($id)
    {
        $FriendlySite = FriendlySiteTranslation::find($id);
        return view('Minister.edit_friendly_site', compact('FriendlySite'));
    }



    public function update(Request $request, $id)
    {
        $FriendlySite = FriendlySiteTranslation::find($id);
        $FriendlySite->update($request->all());
        return redirect()->route('Friendly_Site.index');
    }

    public function destroy($id)
    {
        $FriendlySite = FriendlySiteTranslation::find($id);
        $FriendlySite->delete();
        return redirect()->route('Friendly_Site.index');
    }
}
