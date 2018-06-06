<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Listing extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'address' => $this->address,

            'amenity_wifi' => $this->amenity_wifi,
            'amenity_pets_allowed' => $this->amenity_pets_allowed,
            'amenity_tv' => $this->amenity_tv,
            'amenity_kitchen' => $this->amenity_kitchen,
            'amenity_breakfast' => $this->amenity_breakfast,
            'amenity_laptop' => $this->amenity_laptop,

            'price_per_night' => $this->price_per_night,
            'price_extra_people' => $this->price_extra_people,
            'price_weekly_discount' => $this->price_weekly_discount,
            'price_monthly_discount' => $this->price_monthly_discount,

            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
