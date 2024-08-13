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
            'id' =>$this->id,
            'user_id'=>$this->user_id,
            'category_id'=>$this->category_id,
            'tag_id'=>$this->tag_id,
            'title'=>$this->title,
            'description' => $this->description,
            'photos'=> PhotoResource::collection($this->photos),
            'created_at'=>$this->created_at
        ];
    }
}
