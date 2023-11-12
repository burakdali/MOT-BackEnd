<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=ServiceTranslation::all();
        return view('services.all_services',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=ServiceTranslation::all();
        return view('services.create_services',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceTranslation  $serviceTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceTranslation $serviceTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceTranslation  $serviceTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceTranslation $serviceTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceTranslationRequest  $request
     * @param  \App\Models\ServiceTranslation  $serviceTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceTranslationRequest $request, ServiceTranslation $serviceTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceTranslation  $serviceTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $services=ServiceTranslation::find($id);
        $services->delete();
        return redirect()->route('all_services.index');
    }
}
