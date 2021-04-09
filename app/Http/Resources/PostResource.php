<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Helpers\Time;

class PostResource extends JsonResource
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
            "title"=>$this->title,
            "slug"=>$this->slug, 
            "description"=>$this->description, 
            "category"=>$this->category ? $this->category->name : null, 
            "image" => $this->getImage(),
            "created_at"=>Time::showDateTime($this->created_at),
            "hits"=>$this->hits->count()
        ];
    }
}
