<?php

namespace App\Http\Resources\Lampiran;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LampiranResource extends JsonResource
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
               'nama' => $this->nama,
               'wajib' => $this->wajib ? true : false,
          ];
     }
}
