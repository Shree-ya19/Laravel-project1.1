<?php

namespace App\Enum;

enum ColorEnum: string {
    case Black = 'Black';
    case Red = 'Red';
    case Blue = 'Blue';
    case Grey = 'Grey';
    case White = 'White';

    public function label(): string {
        return self::getLabel($this);
    }

    public static function getLabel(ColorEnum $value): string {
        return match($value) {
            self::Black => 'Black',
            self::Red => 'Red',
            self::Blue => 'Blue',
            self::Grey => 'Grey',
            self::White => 'White',
        };
    }
}
