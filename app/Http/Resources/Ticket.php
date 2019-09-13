<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ticket extends JsonResource
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
            "type" => "tickets",
            "id" => $this->id,
            "attributes" => [
                "title" => $this->title,
                "description" => $this->description,
                "status" => $this->status,
                "request_by" => $this->request_by,
                "solve_by" => $this->solve_by,
                "relationships" => [
                    "comments" => [
                        "data" => $this->comments
                    ]
                ]
            ]
        ];
    }
}
