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
        'company_name',
        'trading_name',
        'phone',
        'zipcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'state',
        'city',
        'business',
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

    public function setDeliveryAttribute($value)
    {
        $this->attributes['delivery'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    public function setIsLinkedAttribute($value)
    {
        $this->attributes['is_linked'] = ($value === true || $value === 'on' ? 1 : 0);
    }
}
