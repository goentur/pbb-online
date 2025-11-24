<?php

namespace App\Http\Requests\Master\Pegawai;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

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
            'nip' => ['required', 'numeric', 'max_digits:18', Rule::unique(Pegawai::class), Rule::unique(User::class, 'nid')],
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(User::class)],
            'telp' => ['required', 'string', 'regex:/^(?:\+62|62|0)8[1-9]\d{7,10}$/', Rule::unique(User::class)],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
            'role' => ['required', Rule::exists(Role::class, 'name')],
            'tte' => ['required', 'in:y,n'],
        ];
    }
}
