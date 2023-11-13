<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Http\Requests\StoreCriteriaRequest;
use App\Http\Requests\UpdateCriteriaRequest;
use App\Http\Resources\CriteriaResource;

class CriteriaController extends Controller
{

    public function index()
    {
    }

    function getAllCriteria()
    {
        $criterias = Criteria::all();
        foreach ($criterias as $criteria) {
            $criteria->titleAR = $criteria->translate('ar')->title;
            $criteria->titleEN = $criteria->translate('en')->title;
            $criteria->contentAR = $criteria->translate('ar')->content;
            $criteria->contentEN = $criteria->translate('en')->content;
            $imagePath = public_path("" . $criteria->image);
            $imageContents = mb_convert_encoding($imagePath, 'UTF-8', 'ISO-8859-1');
            $criteria->image = $imageContents;
        }
        return CriteriaResource::collection($criterias);
    }


    public function create()
    {
        //
    }


    public function store(StoreCriteriaRequest $request)
    {
        $StoreCriteria = new Criteria;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $StoreCriteria->fill([
            'image' => $imageName,
            'ar' => ['title' => $request->get('ar')['title']],
            'en' => ['title' => $request->get('en')['title']],
        ]);
        $StoreCriteria->save();
        return redirect()->route('criteria.index');
    }


    public function show(Criteria $criteria)
    {
        //
    }


    public function edit(Criteria $criteria)
    {
        //
    }


    public function update(UpdateCriteriaRequest $request, Criteria $criteria)
    {
        //
    }

    public function destroy(Criteria $criteria)
    {
        //
    }
}
