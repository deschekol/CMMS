<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
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
            'id'=>$this->id,
            'type'=>$this->type,
            'place'=>$this->place,
            'sector'=>$this->sector,
            'description'=>$this->description,
            'priority'=>$this->priority,
            'scheduledate'=>$this->scheduledate, 
            'frequency'=>$this->frequency
        ];
    }
}
