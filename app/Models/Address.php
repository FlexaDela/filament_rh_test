<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $fillable = [
        'street',
        'neighborhood',
        'cep',
        'type of residenc',
        'house_number'
    ];


    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }
}
