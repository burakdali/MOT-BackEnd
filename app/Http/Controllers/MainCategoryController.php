<?php

namespace App\Http\Controllers;

use App\Http\Resources\MainCategoryResource;
use App\Models\MainCategory;
use App\Http\Requests\StoreMainCategoryRequest;
use App\Http\Requests\UpdateMainCategoryRequest;

class MainCategoryController extends Controller
{

    public function index()
    {
    }
    function getAllMainCategories()
    {
        $categories = MainCategory::all();
        foreach ($categories as $category) {
            $category->titleAR = $category->translate('ar')->title;
            $category->titleEN = $category->translate('en')->title;
        }
        return MainCategoryResource::collection($categories);
    }

    public function create()
    {
    }

    public function store(StoreMainCategoryRequest $request)
    {
        $MainCategory=NEW MainCategory;
        $MainCategory->fill([
            'ar'=>['title'=>$request->get('ar')['title']],
            'en'=>['title'=>$request->get('en')['title']],
        ]);
        $MainCategory->save();
        return redirect()->route('all_category.index');
    }


    public function show(MainCategory $mainCategory)
    {
        //
    }


    public function edit(MainCategory $mainCategory)
    {
        //
    }


    public function update(UpdateMainCategoryRequest $request, MainCategory $mainCategory)
    {
        //
    }

    public function destroy(MainCategory $mainCategory)
    {
        //
    }
}
