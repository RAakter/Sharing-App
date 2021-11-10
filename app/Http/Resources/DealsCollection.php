<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class DealsCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function($deals){
                return [
                    'id' => $deals->id,
                    'image' => asset('assets/backend/images/product_deal_images/'.$deals->image),
                    'title' => $deals->title,
                    'description' => $deals->description,
                    'price' => $deals->price,
                    'discount' => $deals->discount.$deals->discount_type,
                    'discount_amount' => $deals->discount_amount,
                    'discounted_price' => $deals->price - $deals->discount_amount,
                    'status' => $deals->status,
                    'created_at' => $deals->created_at,
                    'updated_at' => $deals->updated_at,
                ];
            }),
        ];
    }
//    public function toArray($request)
//    {
//        return parent::toArray($request);
//    }
}
