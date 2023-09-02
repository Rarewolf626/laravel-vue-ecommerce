<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ProductListResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /** @var \Illuminate\Support\Collection $images */
        $images = $this->images;
        return [
            'id' => $this->id,
            'title' => $this->title,
            'image_url' => $images->count() > 0 ? $images->get(0)->url : null,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'updated_at' => ( new \DateTime($this->updated_at) )->format('Y-m-d H:i:s'),
        ];
    }
}
