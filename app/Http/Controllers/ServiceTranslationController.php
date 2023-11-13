<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceTranslationRequest;
use App\Http\Requests\UpdateServiceTranslationRequest;
use App\Models\Service;
use App\Models\ServiceTranslation;
use Illuminate\Http\Request;

class ServiceTranslationController extends Controller
{

    public function index()
    {
        $services = Service::all();
        foreach ($services as $service) {
            $service->typeEN = $service->translate('en', true)->type;
            $service->typeAR = $service->translate('ar', true)->type;
        }
        return view('services.all_services', compact('services'));
    }


    public function create()
    {
        $services = ServiceTranslation::all();
        return view('services.create_services', compact('services'));
    }


    public function store(StoreServiceTranslationRequest $request)
    {
        //
    }


    public function show(ServiceTranslation $serviceTranslation)
    {
        //
    }


    public function edit(ServiceTranslation $serviceTranslation)
    {
        //
    }


    public function update(UpdateServiceTranslationRequest $request, ServiceTranslation $serviceTranslation)
    {
        //
    }


    public function destroy($id)
    {
        $services = ServiceTranslation::find($id);
        $services->delete();
        return redirect()->route('all_services.index');
    }
}
