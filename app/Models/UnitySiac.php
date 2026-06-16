<?php

namespace App\Models;

use Database\Factories\UnitySiacFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

#[UseFactory(UnitySiacFactory::class)]
class UnitySiac extends Model
{
    use HasFactory;

    protected $fillable = ['neighborhood','street','cep'];

    public function workers(): HasMany
    {
        return $this->hasMany(Worker::class);
    }
}
