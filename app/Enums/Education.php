<?php
namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Education: string implements HasLabel
{
    case FUNDAMENTAL_INCOMPLETO = 'fundamental_incompleto';
    case FUNDAMENTAL_COMPLETO = 'fundamental_completo';
    case MEDIO_INCOMPLETO = 'medio_incompleto';
    case MEDIO_COMPLETO = 'medio_completo';
    case SUPERIOR_INCOMPLETO = 'superior_incompleto';
    case SUPERIOR_COMPLETO = 'superior_completo';
    case POS_GRADUACAO = 'pos_graduacao';
    case MESTRADO = 'mestrado';
    case DOUTORADO = 'doutorado';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::FUNDAMENTAL_INCOMPLETO => 'Ensino Fundamental Incompleto',
            self::FUNDAMENTAL_COMPLETO => 'Ensino Fundamental Completo',
            self::MEDIO_INCOMPLETO => 'Ensino Médio Incompleto',
            self::MEDIO_COMPLETO => 'Ensino Médio Completo',
            self::SUPERIOR_INCOMPLETO => 'Ensino Superior Incompleto',
            self::SUPERIOR_COMPLETO => 'Ensino Superior Completo',
            self::POS_GRADUACAO => 'Pós-graduação',
            self::MESTRADO => 'Mestrado',
            self::DOUTORADO => 'Doutorado',
        };
    }
}
