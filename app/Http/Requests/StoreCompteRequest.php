<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'numCompte' => 'required|string|unique:comptes,numCompte|min:4|max:50',
            'titulaire' => 'required|uuid|exists:clients,id',
            'type' => 'required|in:courant,epargne,bloqué',
            'solde' => 'required|numeric|min:0',
            'date_creation' => 'required|date',
            'statut' => 'required|in:actif,inactif,fermé',
        ];
    }
}
