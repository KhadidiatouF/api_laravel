<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nom' => 'required|string|min:2|max:100',
            'prenom' => 'required|string|min:2|max:100',
            'telephone' => 'required|string|size:9|unique:clients,telephone',
            'email' => 'required|email|unique:clients,email',
            'adresse' => 'nullable|string|max:255',
        ];
    }
}
