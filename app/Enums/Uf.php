<?php
namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum Uf: string implements HasLabel
{
    case AC = 'AC';
    case AL = 'AL';
    case AP = 'AP';
    case AM = 'AM';
    case BA = 'BA';
    // ... adicione as outras siglas ...
    case SP = 'SP';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::AC => 'Acre',
            self::AL => 'Alagoas',
            self::AP => 'Amapá',
            self::AM => 'Amazonas',
            self::BA => 'Bahia',
            self::SP => 'São Paulo',
        };
    }
}
