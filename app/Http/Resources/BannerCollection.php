<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BannerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'data' => $this->collection->transform(function($banners){
                return [
                    'id' => $banners->id,
                    'image' => asset('assets/backend/images/promotional_banner_images/'.$banners->image),
                    'title' => $banners->title,
                    'description' => $banners->description,
                    'status' => $banners->status,
                    'created_at' => $banners->created_at
                ];
            }),
        ];
    }
}
