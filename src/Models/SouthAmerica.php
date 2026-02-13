<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class SouthAmerica extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = 'SA';

    /**
     * UN M.49 numeric code
     */
    public string $numeric = '005';

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'South America',
            'hu' => 'Dél Amerika',
            'de' => 'Südamerika',
            'es' => 'Sudamerica',
            'it' => 'Sud America',
            'fr' => 'Amérique du Sud',
        ];

        return $names[$locale];
    }
}
