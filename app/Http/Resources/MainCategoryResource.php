<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MainCategoryResource extends JsonResource
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
            "title" => [
                "ar" => $this->titleAR,
                "en" => $this->titleEN,
            ],
            "timestamps" => $this->created_at,
        ];
    }
}
