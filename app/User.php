<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cell',
        'restaurant_id',
        'admin',
        'client'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function setCellAttribute($value)
    {
        $this->attributes['cell'] = (! empty($value) ? $this->clearField($value) : null);
    }

    public function getCellAttribute($value)
    {
        if (empty($value)) {
            return '';
        }

        if (strlen($value) == 10) {
            return '(' . substr($value, 0, 2) . ')' . substr($value, 2, 4) . '-' . substr($value, 6);
        }

        if (strlen($value) == 11) {
            return '(' . substr($value, 0, 2) . ')' . substr($value, 2, 5) . '-' . substr($value, 7);
        }

        return $value;
    }

    private function clearField(?string $param)
    {
        if (empty($param)) {
            return null;
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
