<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{

    public function index()
    {
    }
    function getAllServices()
    {
        $services = Service::all();
        foreach ($services as $service) {
            $service->typeAR = $service->translate('ar')->type;
            $service->typeEN = $service->translate('en')->type;
        }
        return ServiceResource::collection($services);
    }
    public function create()
    {
        //
    }

    public function store(StoreServiceRequest $request)
    {
        //
    }

    public function show(Service $service)
    {
        //
    }


    public function edit(Service $service)
    {
        //
    }


    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }


    public function destroy(Service $service)
    {
        //
    }
}
