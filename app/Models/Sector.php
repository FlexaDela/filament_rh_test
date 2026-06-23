<?php

namespace App\Models;

use Database\Factories\SectorFactory;
use Illuminate\Database\Eloquent\Attributes\UseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[UseFactory(SectorFactory::class)]
class Sector extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function workers(): HasMany
    {
        return $this->hasMany(Worker::class);
    }

}
