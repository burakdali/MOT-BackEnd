<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use App\Http\Requests\StoreServiceDetailRequest;
use App\Http\Requests\UpdateServiceDetailRequest;

class ServiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceDetailRequest $request)
    {
        $StoreServiceDetail=NEW Service;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $StoreServiceDetail->fill([
            'image' => $imageName,
            'ar'=>['type'=>$request->get('ar')['type']],
            'en'=>['type'=>$request->get('en')['type']],
        ]);
        $StoreServiceDetail->save();
        return redirect()->route('Services_details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceDetail $serviceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceDetail $serviceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceDetailRequest  $request
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceDetailRequest $request, ServiceDetail $serviceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceDetail  $serviceDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceDetail $serviceDetail)
    {
        //
    }
}
