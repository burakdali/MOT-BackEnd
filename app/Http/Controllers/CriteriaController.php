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
        }
        return CriteriaResource::collection($criterias);
    }


    public function create()
    {
        //
    }


    public function store(StoreCriteriaRequest $request)
    {
        //
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
