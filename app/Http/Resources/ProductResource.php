<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name'=>$this->name,
            'price'=>$this->price,
            'description'=>$this->desc,
            'stock'=>$this->stock == 0 ? 'out of stock' :$this->stock,
            'discount'=>$this->discount. '%',
            'price after discount'=>round($this->price - $this->discount/100 * $this->price,2) ,
            'rate'=>count($this->reviews)>0 ? round( $this->reviews->sum('star')/count($this->reviews)):'No ratings yet' ,
            'hrefs'=>[
                'reviews'=>route('reviews.index',$this->id),
            ]

        ];
    }
}
