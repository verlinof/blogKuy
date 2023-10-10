<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "user" => $this->whenLoaded('User'),
            "category_id" => $this->category_id,
            "category" => $this->whenLoaded('Category'),
            "title" => $this->title,
            "slug" => $this->slug,
            "slug" => $this->slug,
            "body" => $this->body,
            "excerpt" => $this->excerpt,
            "created_at" => $this->created_at,
        ];
    }
}