<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Topicality extends JsonResource
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
            'title' => 'Actuality title : ' . $this->title,
            'content' => substr($this->content, 0, 10) . '...',
        ];
    }
}
