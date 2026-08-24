<?php
namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum GenderIdentity: string implements HasLabel
{
    case HOMEM = 'homem';
    case MULHER = 'mulher';
    case NAO_BINARIO = 'nao_binario';
    case PREFIRO_NAO_INFORMAR = 'prefiro_nao_informar';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::HOMEM => 'Homem',
            self::MULHER => 'Mulher',
            self::NAO_BINARIO => 'Não-binário',
            self::PREFIRO_NAO_INFORMAR => 'Prefiro não informar',
        };
    }
}
