<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
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
            "type" => "comments",
            "id" => $this->id,
            "attributes" => [
                "content" => $this->content,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
                "relationships" => [
                    "ticket" => [
                        "data" => $this->ticket
                    ],
                    "user" => [
                        "data"=> $this->user
                    ]
                ]
            ]
        ];
    }
}
