<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderHistoryCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function($history){
                return [
                    'id'=>$history->id,
                    'order_id'=>$history->order_id,
                    'customer_id'=>$history->customer_id,
                    'product_id'=>$history->product_id,
                    'qty'=>$history->qty,
                    'price'=>$history->price,
                    'discount_price'=>$history->discount_price,
                    'is_discount'=>$history->is_discount,
                    'subtotal'=>$history->subtotal,
                    'total'=>$history->total,
                    'shipping_id'=>$history->shipping_id,
                    'status'=>$history->status,
                    'payment_status'=>$history->payment_status,
                    'type'=>$history->type,
                    'created_at' => Carbon::parse($history->created_at)->format('d/m/Y H:i:s'),
                    'updated_at' => Carbon::parse($history->updated_at)->format('d/m/Y H:i:s'),
                ];
            }),
        ];
    }
}
