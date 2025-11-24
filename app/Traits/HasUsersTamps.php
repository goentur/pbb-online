<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait HasUserStamps
{
     public static function bootHasUserStamps(): void
     {
          static::creating(function ($model) {
               if (Auth::check()) {
                    $model->created_by = Auth::user()->id;
                    $model->updated_by = Auth::user()->id;
               }
          });

          static::updating(function ($model) {
               if (Auth::check()) {
                    $model->updated_by = Auth::user()->id;
               }
          });

          static::deleting(function ($model) {
               if (Auth::check() && $model->isFillable('deleted_by')) {
                    $model->deleted_by = Auth::user()->id;
               }
          });
     }
}
