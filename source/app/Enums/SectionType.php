<?php

namespace App\Enums;

enum SectionType: string
{
    case CONTACT_US = 'contact-us';
    case ABOUT_US = 'about-us';
    case STATISTICS = 'statistics';
    case SERVICES = 'services';
    case HERO = 'hero';
    case WORK = 'work';

    public function layout(): string
    {
        return self::getLayout($this);
    }

    private function getLayout(self $value): string
    {
        return match ($value) {
            self::CONTACT_US => \App\Orchid\Layouts\Section\SectionEditPartials\ContactUsLayout::class,
            self::ABOUT_US => \App\Orchid\Layouts\Section\SectionEditPartials\AboutUsLayout::class,
            self::STATISTICS => \App\Orchid\Layouts\Section\SectionEditPartials\StatisticsLayout::class,
            self::SERVICES => \App\Orchid\Layouts\Section\SectionEditPartials\ServicesLayout::class,
            self::HERO, self::WORK => '',
        };
    }
}
