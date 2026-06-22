<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Addres extends Model
{
    protected $fillable = [
        'street',
        'neighborhood',
        'cep',
        'type_of_residence',
        'house_number'
    ];


    public function worker(): BelongsTo
    {
        return $this->belongsTo(Worker::class);
    }
}
