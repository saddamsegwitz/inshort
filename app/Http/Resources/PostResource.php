<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
                'title' => $this->title_te,
                'image' => $this->image_te ? asset("uploads/posts/images/" . $this->image_te) : null,
                'body' => $this->body_te,
            ];
        } else {
            return [
                'id' => $this->id,
                'title' => $this->title_en,
                'image' => $this->image_en ? asset("uploads/posts/images/" . $this->image_en) : null,
                'body' => $this->body_en,
            ];
        }
    }
}
