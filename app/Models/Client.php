<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'cpf',
        'zipcode',
        'street',
        'number',
        'state',
        'city',
        'occupation'
    ];

    public function setZipcodeAttribute($value)
    {
        $this->attributes['zipcode'] = $this->clearField($value);
    }

    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = $this->clearField($value);
    }

    private function clearField(string $param)
    {
        if(empty($param)) {
            return '';
        }
        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
