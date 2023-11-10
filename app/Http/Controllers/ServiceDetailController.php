<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use App\Http\Requests\StoreServiceDetailRequest;
use App\Http\Requests\UpdateServiceDetailRequest;
use App\Http\Resources\ServiceDetailResource;
use Illuminate\Support\Facades\Log;

class ServiceDetailController extends Controller
{


    function get_service_details($id)
    {
        if ($id == 1) {
            $serviceDetails = ServiceDetail::orderBy('used_times', 'desc')->get();
        } else {
            $serviceDetails = ServiceDetail::where('service_id', $id)->get();
        }
        foreach ($serviceDetails as $service) {
            $service->titleAR = $service->translate('ar')->title;
            $service->titleEN = $service->translate('en')->title;
            $service->contentAR = $service->translate('ar')->content;
            $service->contentEN = $service->translate('en')->content;
        }
        return ServiceDetailResource::collection($serviceDetails);
    }
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(StoreServiceDetailRequest $request)
    {
        //
    }


    public function show(ServiceDetail $serviceDetail)
    {
        //
    }


    public function edit(ServiceDetail $serviceDetail)
    {
        //
    }


    public function update(UpdateServiceDetailRequest $request, ServiceDetail $serviceDetail)
    {
        //
    }


    public function destroy(ServiceDetail $serviceDetail)
    {
        //
    }
}
