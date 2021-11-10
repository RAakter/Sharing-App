<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            [
                'id' => $this->id,
                'name' => $this->name ?? '',
                'email' => $this->email ?? '',
                'phone' => $this->phone ?? '',
                'image' => $this->image ?? '',
//                'image' => 'assets/backend/images/user_images/' . $this->image ?? 'null',
                'division_id' => $this->division_id ?? '',
                'district_id' => $this->district_id ?? '',
                'area_id' => $this->area_id ?? '',
                'division_name' => $this->divisionName->division_title ?? '',
                'district_name' => $this->districtName->district_title ?? '',
                'area_name' => $this->areaName->area_title ?? '',
                'created_at' => $this->created_at,
//                'updated_at' => $this->updated_at,

            ]

        ];
    }
}
