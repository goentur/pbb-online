<?php

namespace App\Http\Requests\Master\Pegawai;

use App\Models\Pegawai;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nip' => 'required|numeric|max_digits:18|unique:' . Pegawai::class,
            'nama' => 'required|string|max:255',
            'tte' => 'required|in:y,n',
        ];
    }
}
