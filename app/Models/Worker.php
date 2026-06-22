<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\GenderIdentity;
use App\Enums\Education;
use App\Enums\Uf;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'birth_day',
        'cpf',
        'uf',
        'education',
        'gender_identity',
        'social_name',
        'email'
    ];


    protected function casts(): array
    {
        return [
            'birthday' => 'date',
            'gender' => Gender::class,
            'gender_identity' => GenderIdentity::class,
            'education' => Education::class,
            'uf' => Uf::class,
        ];
    }

    protected function formattedCpf(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) =>
                preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $attributes['cpf'] ?? '')
            );
    }

    public function unitySiac(): BelongsTo
    {
        return $this->belongsTo(UnitySiac::class);
    }

    public function addres(): HasOne
    {
        return $this->hasOne(Addres::class);
    }
}
