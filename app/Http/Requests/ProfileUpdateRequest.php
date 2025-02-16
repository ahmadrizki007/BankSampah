<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    if (preg_match('/^[0-9]+$/', $value)) {
                        $fail($this->messages()['name.custom']);
                    }
                },
            ],
            // 'email' => [
            //     'required',
            //     'string',
            //     'email',
            //     'max:255',
            //     Rule::unique(User::class)->ignore($this->user()->id),
            // ],
            'age' => ['required', 'integer'],
            'gender' => ['required', 'string'],
            'address' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'name.string' => 'Nama harus berupa huruf/string',
            'name.max' => 'Nama tidak boleh lebih dari 5 karakter',
            'name.custom' => 'Nama tidak boleh hanya angka',
            'email.required' => 'Email tidak boleh kosong',
            'email.string' => 'Email harus berupa huruf/string',
            'email.email' => 'Email harus berupa email',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter',
            'email.unique' => 'Email sudah terdaftar',
            'age.required' => 'Umur tidak boleh kosong',
            'age.integer' => 'Umur harus berupa angka',
            'gender.required' => 'Jenis kelamin tidak boleh kosong',
            'gender.string' => 'Jenis kelamin harus berupa huruf/string',
            'address.string' => 'Alamat harus berupa huruf/string',
            'address.max' => 'Alamat tidak boleh lebih dari 255 karakter',
        ];
    }
}
