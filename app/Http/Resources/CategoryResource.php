<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $locale = app()->getLocale();
        if ($locale == 'te') {
            return [
                'id' => $this->id,
                'name' => $this->name_te,
                'image' => $this->image_te ? asset("uploads/category/images/" . $this->image_te) : null,
            ];
        } else {
            return [
                'id' => $this->id,
                'name' => $this->name_en,
                'image' => $this->image_en ? asset("uploads/category/images/" . $this->image_en) : null,
            ];
        }
    }
}
