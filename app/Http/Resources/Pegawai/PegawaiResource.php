<?php

namespace App\Http\Resources\Pegawai;

use App\Enums\StatusTTEPegawai;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PegawaiResource extends JsonResource
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
               'nip' => $this->nip,
               'email' => $this->user->email,
               'telp' => $this->user->telp,
               'tte' => $statusTTE ? [
                    'value' => $statusTTE->value(),
                    'label' => $statusTTE->label(),
                    'color' => $statusTTE->color(),
                    'status' => $statusTTE->boolean(),
               ] : null,
               'role' => $this->user->getRoleNames()[0],
          ];
     }
}
