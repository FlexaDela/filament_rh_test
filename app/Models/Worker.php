<?php

namespace App\Models;

use App\Enums\Gender;
use App\Enums\GenderIdentity;
use App\Enums\Education;
use App\Enums\Uf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Symfony\Component\Routing\Generator\Dumper\GeneratorDumperInterface;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'birth_day',
        'cpf',
        'rg',
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

    public function unitySiac(): BelongsTo
    {
        return $this->belongsTo(UnitySiac::class);
    }
}
