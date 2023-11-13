<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceDetailTranslationRequest;
use App\Http\Requests\UpdateServiceDetailTranslationRequest;
use App\Models\ServiceDetail;
use App\Models\ServiceDetailTranslation;
use Illuminate\Http\Request;

class ServiceDetailTranslationController extends Controller
{

    public function index()
    {

        $services_detail = ServiceDetail::all();
        foreach ($services_detail as $service) {
            $service->titleAR = $service->translate('ar')->title;
            $service->titleEN = $service->translate('en')->title;
            $service->contentAR = $service->translate('ar')->content;
            $service->contentEN = $service->translate('en')->content;
        }
        return view('services.Services_details', compact('services_detail'));
    }


    public function create()
    {
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
