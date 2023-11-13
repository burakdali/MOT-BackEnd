<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceDetailTranslationRequest;
use App\Http\Requests\UpdateServiceDetailTranslationRequest;
use App\Models\ServiceDetailTranslation;
use Illuminate\Http\Request;

class ServiceDetailTranslationController extends Controller
{

    public function index()
    {
        $services_detail = ServiceDetailTranslation::all();
        return view('services.Services_details', compact('services_detail'));
    }


    public function create()
    {
        $services_detail = ServiceDetailTranslation::all();
        return view('services.create_services_detail', compact('services_detail'));
    }


    public function store(StoreServiceDetailTranslationRequest $request)
    {
        //
    }


    public function show(ServiceDetailTranslation $serviceDetailTranslation)
    {
        //
    }


    public function edit(ServiceDetailTranslation $serviceDetailTranslation)
    {
        //
    }

    public function update(UpdateServiceDetailTranslationRequest $request, ServiceDetailTranslation $serviceDetailTranslation)
    {
        //
    }


    public function destroy($id)
    {
        $services_detail = ServiceDetailTranslation::find($id);
        $services_detail->delete();
        return redirect()->route('Services_details.index');
    }
}
