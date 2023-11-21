<?php

namespace App\Enums;

enum WorkType: string
{
    case ANDROID_APP = 'android_app';
    case WEBSITE = 'website';
    case THREE_D_DESIGN = '3d_design';

    public function label(): string
    {
        return self::getLabel($this);
    }

    public function getLabel(self $value): string
    {
         return match ($value) {
            self::ANDROID_APP => 'Android Application',
            self::WEBSITE => 'Website',
            self::THREE_D_DESIGN => '3D Design',
        };
    }

    public static function getCasesValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
