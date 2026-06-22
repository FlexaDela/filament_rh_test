<?php

namespace App\Models;

use Database\Factories\AddresFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[UseFactory(AddresFactory::class)]
class Addres extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'worker_id',
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
