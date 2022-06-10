<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'user' => [
              'id' => $this->id,
              'name' => $this->name,
              'email' => $this->email,
              'firstName' => $this->firstName,
              'lastName' => $this->lastName,
          ],
        ];
    }
}
