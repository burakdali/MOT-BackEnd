<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LinksResource extends JsonResource
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
            "facebook" => $this->facebook,
            "instagram" => $this->instagram,
            "x" => $this->x,
            "linked_in" => $this->linked_in,
            "location" => $this->location,
            "location_link" => $this->location_link,
            "phone_number" => $this->phone_number,
            "email" => $this->email,
        ];
    }
}
