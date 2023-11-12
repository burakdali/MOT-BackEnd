<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RelatedSiteResource extends JsonResource
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
            'link' => $this->link,
            "name" => [
                "ar" => $this->nameAR,
                "en" => $this->nameEN,
            ],
            "timestamps" => $this->created_at,
        ];
    }
}
