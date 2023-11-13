<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use App\Http\Resources\ImageResource;

class ImageController extends Controller
{

    public function index()
    {
    }
    function getAllImages()
    {
        $images = Image::all();
        foreach ($images as $image) {
            $imagePath = public_path("" . $image->image);
            $imageContents = mb_convert_encoding($imagePath, 'UTF-8', 'ISO-8859-1');
            $image->image = $imageContents;
        }
        return ImageResource::collection($images);
    }

    public function create()
    {
        //
    }

    public function store(StoreImageRequest $request)
    {
        //
    }


    public function show(Image $image)
    {
        //
    }

    public function edit(Image $image)
    {
        //
    }


    public function update(UpdateImageRequest $request, Image $image)
    {
        //
    }


    public function destroy(Image $image)
    {
        //
    }
}
