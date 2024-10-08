<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'tag_id'=>$this->tag_id,
            'title'=>$this->title,
            'description'=>$this->description,
            'video'=>$this->video,
            'photo'=>$this->photo,
            'created_at'=>$this->created_at
        ];
    }
}
