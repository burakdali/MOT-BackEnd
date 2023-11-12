<?php

namespace App\Http\Controllers;


use App\Models\MainCategoryTranslation;
use App\Models\MainCategory;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreMainCategoryTranslationRequest;
use App\Http\Requests\UpdateMainCategoryTranslationRequest;

class MainCategoryTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mainCategory=MainCategoryTranslation::all();
        return view('MainCategory.all_category',compact('mainCategory'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= MainCategoryTranslation::all();
        return view('MainCategory.create_category',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMainCategoryTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMainCategoryTranslationRequest $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainCategoryTranslation  $mainCategoryTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(MainCategoryTranslation $mainCategoryTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainCategoryTranslation  $mainCategoryTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $categories= MainCategoryTranslation::find($id);
        return view('MainCategory.edit_category', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaCenterTranslationRequest  $request
     * @param  \App\Models\MediaCenterTranslation  $mediaCenterTranslation
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request ,$id)
    {
        $categories= MainCategoryTranslation::find($id);
        $categories->update($request->all());
        return redirect()->route('all_category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaCenterTranslation  $mediaCenterTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $categories=MainCategoryTranslation::find($id);
        $categories->delete();
        return redirect()->route('all_category.index');
    }
}
