<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_name' => $this->name,
            'product_id' => $this->latestOrder? $this->latestOrder->product_id : null,
            'product_name' => $this->latestOrder->product->product_descriptions[0] ? $this->latestOrder->product->product_descriptions[0]->name  : null
        ];
    }
}
