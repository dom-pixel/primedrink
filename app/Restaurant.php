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

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function setDeliveryAttribute($value)
    {
        $this->attributes['delivery'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    public function setIsLinkedAttribute($value)
    {
        $this->attributes['is_linked'] = ($value === true || $value === 'on' ? 1 : 0);
    }

    public function setDocumentAttribute($value)
    {
        $this->attributes['document'] = (! empty($value) ? $this->clearField($value) : null);
    }

    public function setPhoneAttribute($value)
    {
        $this->attributes['phone'] = (! empty($value) ? $this->clearField($value) : null);
    }

    public function getDocumentAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return
            substr($value, 0, 3) . '.' .
            substr($value, 3, 3) . '.' .
            substr($value, 6, 3) . '-' .
            substr($value, 9, 2);
    }

    public function setCnpjAttribute($value)
    {
        $this->attributes['cnpj'] = (! empty($value) ? $this->clearField($value) : null);
    }

    public function getCnpjAttribute($value)
    {
        return substr($value, 0, 2) . '.' . substr($value, 2, 3) . '.' . substr($value, 5, 3) .
            '/' . substr($value, 8, 4) . '-' . substr($value, 12, 2);
    }

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = (! empty($value) ? $this->clearField($value) : null);
    }

    public function getZipcodeAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return substr($value, 0, 5) . '-' . substr($value, 5, 3);
    }

    private function clearField(?string $param)
    {
        if (empty($param)) {
            return null;
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
