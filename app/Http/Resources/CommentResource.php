<?php

namespace App\Http\Resources;

use App\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
                'user' => UserResource::make($this->whenLoaded('user')),
                'comment' => $this->comment_te,
                'created_at' => $this->created_at->toDateTimeString(),
            ];
        }

        return [
            'id' => $this->id,
            'user' => UserResource::make($this->whenLoaded('user')),
            'comment' => $this->comment_en,
            'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}
