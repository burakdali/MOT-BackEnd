<?php

namespace App\Http\Controllers;

use App\Models\CriteriaTranslation;
use App\Models\Criteria;
use App\Http\Requests\StoreCriteriaTranslationRequest;
use App\Http\Requests\UpdateCriteriaTranslationRequest;

class CriteriaTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $criteria=CriteriaTranslation::all();
        return view('criteria.criteria',compact('criteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $criteria= CriteriaTranslation::all();
        return view('criteria.create_criteria',compact('criteria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCriteriaTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCriteriaTranslationRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CriteriaTranslation  $criteriaTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(CriteriaTranslation $criteriaTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CriteriaTranslation  $criteriaTranslation
     * @return \Illuminate\Http\Response
     */

    public function edit( $id)
    {
        $criteria=CriteriaTranslation::find($id);
        return view('criteria.edit_ceiteria', compact('criteria'));

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCriteriaTranslationRequest  $request
     * @param  \App\Models\CriteriaTranslation  $criteriaTranslation
     * @return \Illuminate\Http\Response
     */

    public function update( Request $request ,$id)
    {
        $criteria=CriteriaTranslation::find($id);
        $criteria->update($request->all());
        return redirect()->route('criteria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CriteriaTranslation  $criteriaTranslation
     * @return \Illuminate\Http\Response
     */

    public function destroy( $id)
    {
        $criteria=CriteriaTranslation::find($id);
        $criteria->delete();
        return redirect()->route('criteria.index');
    }
}
