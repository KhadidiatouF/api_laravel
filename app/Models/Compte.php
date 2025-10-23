<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Compte extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'numCompte',
        'titulaire',
        'type',
        'date_creation',
        'statut',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'titulaire');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getSoldeAttribute(): float
    {
        $depots = $this->transactions()
            ->where('type', 'depot')
            ->sum('montant');

        $retraits = $this->transactions()
            ->where('type', 'retrait')
            ->sum('montant');

        return $depots - $retraits;
    }
}
