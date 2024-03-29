<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WordpressPost extends JsonResource
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
            'id' => $this->resource->id,
            'title' => $this->resource->title->rendered,
            'content' => $this->resource->content->rendered,
        ];
    }
}
