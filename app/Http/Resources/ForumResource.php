<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this->id,
        'titre' => isset($this->forum[app()->getLocale()]) ? $this->forum[app()->getLocale()] : $this->forum['en'],
        'contenu' => isset($this->forum[app()->getLocale()]) ? $this->forum[app()->getLocale()] : $this->forum['en']
        ];
    }
}
