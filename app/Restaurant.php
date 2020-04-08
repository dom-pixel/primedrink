<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cnpj',
        'name',
        'phone',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'delivery',
        'plan_id',
        'full_name',
        'document',
        'document_secondary',
        'document_secondary_complement',
        'bank_id',
        'agency',
        'account',
        'digit',
        'is_linked'
    ];
}
