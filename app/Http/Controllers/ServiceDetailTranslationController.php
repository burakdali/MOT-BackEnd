<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDetailTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services_detail=ServiceDetailTranslation::all();
        return view('services.Services_details',compact('services_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services_detail=ServiceDetailTranslation::all();
        return view('services.create_services_detail',compact('services_detail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceDetailTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceDetailTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceDetailTranslation  $serviceDetailTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceDetailTranslation $serviceDetailTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceDetailTranslation  $serviceDetailTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceDetailTranslation $serviceDetailTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceDetailTranslationRequest  $request
     * @param  \App\Models\ServiceDetailTranslation  $serviceDetailTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceDetailTranslationRequest $request, ServiceDetailTranslation $serviceDetailTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceDetailTranslation  $serviceDetailTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services_detail=ServiceDetailTranslation::find($id);
        $services_detail->delete();
        return redirect()->route('Services_details.index');
    }
}
