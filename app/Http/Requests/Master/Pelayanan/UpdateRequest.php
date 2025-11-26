<?php

namespace App\Http\Requests\Master\Pelayanan;

use App\Enums\StatusPelayanan;
use App\Models\Ref\RefLampiran;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:255'],
            'keterangan' => ['required', 'string', 'max:255'],
            'status' => ['required', Rule::enum(StatusPelayanan::class)],
            'url' => ['required', 'string', 'max:255'],
            'tte' => ['required', 'in:y,n'],
            'lampiran' => ['nullable', 'array'],
            'lampiran.*' => Rule::exists(RefLampiran::class, 'id'),
        ];
    }
}
