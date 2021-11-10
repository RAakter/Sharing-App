<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            [
                'id'=>$this->id,
                'order_id'=>$this->order_id,
                'customer_id'=>$this->customer_id,
                'product_id'=>$this->product_id,
                'qty'=>$this->qty,
                'price'=>$this->price,
                'discount_price'=>$this->discount_price,
                'is_discount'=>$this->is_discount,
                'subtotal'=>$this->subtotal,
                'total'=>$this->total,
                'shipping_id'=>$this->shipping_id,
                'status'=>$this->status,
                'payment_status'=>$this->payment_status,
                'type'=>$this->type,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y H:i:s'),
                'updated_at' => Carbon::parse($this->updated_at)->format('d/m/Y H:i:s'),

            ]

        ];
    }
}
