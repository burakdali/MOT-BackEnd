<?php

namespace App\Http\Controllers;

use App\Models\CriteriaTranslation;
use App\Models\Criteria;
use App\Http\Requests\StoreCriteriaTranslationRequest;
use App\Http\Requests\UpdateCriteriaTranslationRequest;
use Illuminate\Http\Request;

class CriteriaTranslationController extends Controller
{

    public function index()
    {

        $criteria = CriteriaTranslation::all();
        return view('criteria.criteria', compact('criteria'));
    }


    public function create()
    {
        $criteria = CriteriaTranslation::all();
        return view('criteria.create_criteria', compact('criteria'));
    }


    public function store(StoreCriteriaTranslationRequest $request)
    {
    }


    public function show(CriteriaTranslation $criteriaTranslation)
    {
        //
    }



    public function edit($id)
    {
        $criteria = CriteriaTranslation::find($id);
        return view('criteria.edit_ceiteria', compact('criteria'));
    }

    public function update(Request $request, $id)
    {
        $criteria = CriteriaTranslation::find($id);
        $criteria->update($request->all());
        return redirect()->route('criteria.index');
    }



    public function destroy($id)
    {
        $criteria = CriteriaTranslation::find($id);
        $criteria->delete();
        return redirect()->route('criteria.index');
    }
}
