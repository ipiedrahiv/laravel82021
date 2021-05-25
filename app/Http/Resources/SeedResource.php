<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SeedResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'seller' => $this->getSeller(),
            'stock' => $this->getStock(),
            'price' => $this->getPrice(),
        ];
    }
}
