<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitySiac extends Model
{
    protected $fillable = ['neighborhood','street','cep'];


    public function workers(): HasMany
    {
        return $this->hasMany(Worker::class);
    }
}
