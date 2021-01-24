<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name'=>$this->name,
            'price after discount'=>round($this->price - $this->discount/100 * $this->price,2) ,
            'rate'=>count($this->reviews)>0 ? round( $this->reviews->sum('star')/count($this->reviews)):'No ratings yet' ,
            'hrefs'=>[
                'reviews'=>route('products.show',$this->id),
            ]

        ];
    }
}
