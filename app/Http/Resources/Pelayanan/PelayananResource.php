<?php

namespace App\Http\Resources\Pelayanan;

use App\Enums\StatusTTEPegawai;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PelayananResource extends JsonResource
{
     /**
      * Transform the resource into an array.
      *
      * @return array<string, mixed>
      */
     public function toArray(Request $request): array
     {
          $statusTTE = StatusTTEPegawai::tryFrom($this->status_tte);
          return [
               'id' => $this->id,
               'nama' => $this->nama,
               'keterangan' => $this->keterangan,
               'status' => $this->status_pelayanan,
               'url' => $this->url,
               'tte' => $statusTTE ? [
                    'value' => $statusTTE->value(),
                    'label' => $statusTTE->label(),
                    'color' => $statusTTE->color(),
                    'status' => $statusTTE->boolean(),
               ] : null,
               'lampiran' => $this->lampiran->pluck('id')->values(),
          ];
     }
}
