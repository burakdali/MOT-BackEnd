<?php

namespace App\Http\Controllers;


use App\Models\MainCategoryTranslation;
use App\Models\MainCategory;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreMainCategoryTranslationRequest;
use App\Http\Requests\UpdateMainCategoryTranslationRequest;
use Illuminate\Http\Request;

class MainCategoryTranslationController extends Controller
{

    public function index()
    {
        $mainCategory = MainCategoryTranslation::all();
        return view('MainCategory.all_category', compact('mainCategory'));
    }


    public function create()
    {
        $categories = MainCategoryTranslation::all();
        return view('MainCategory.create_category', compact('categories'));
    }

    public function store(StoreMainCategoryTranslationRequest $request)
    {
    }



    public function show(MainCategoryTranslation $mainCategoryTranslation)
    {
        //
    }


    public function edit($id)
    {
        $categories = MainCategoryTranslation::find($id);
        return view('MainCategory.edit_category', compact('categories'));
    }


    public function update(Request $request, $id)
    {
        $categories = MainCategoryTranslation::find($id);
        $categories->update($request->all());
        return redirect()->route('all_category.index');
    }


    public function destroy($id)
    {
        $categories = MainCategoryTranslation::find($id);
        $categories->delete();
        return redirect()->route('all_category.index');
    }
}
