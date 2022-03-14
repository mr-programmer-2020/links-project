<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LinkResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'link' => route('link.redirect', $this->token)
        ];
    }
}
