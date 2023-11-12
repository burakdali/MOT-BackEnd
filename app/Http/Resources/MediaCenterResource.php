<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaCenterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "image" => $this->image,
            "title" => [
                "ar" => $this->titleAR,
                "en" => $this->titleEN,
            ],
            "content" => [
                "ar" => $this->contentAR,
                "en" => $this->contentEN,
            ],
            "timestamps" => $this->created_at,
        ];
    }
}
