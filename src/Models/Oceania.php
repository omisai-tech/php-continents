<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class Oceania extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = 'OC';

    /**
     * UN M.49 numeric code
     */
    public string $numeric = '009';

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'Oceania',
            'hu' => 'Óceánia',
            'de' => 'Ozeanien',
            'es' => 'Oceanía',
            'it' => 'Oceania',
            'fr' => 'Océanie',
        ];

        return $names[$locale];
    }
}
