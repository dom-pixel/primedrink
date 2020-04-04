<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'email', 'name', 'status', 'cell'
    ];

    public function setCellAttribute($value)
    {
        $this->attributes['cell'] = (! empty($value) ? $this->clearField($value) : null);
    }

    private function clearField(?string $param)
    {
        if (empty($param)) {
            return null;
        }
        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }

}
