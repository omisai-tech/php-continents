<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class Africa extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = 'AF';

    /**
     * UN M.49 numeric code
     */
    public string $numeric = '002';

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'Africa',
            'hu' => 'Afrika',
            'de' => 'Afrika',
            'es' => 'África',
            'it' => 'Africa',
            'fr' => 'Afrique',
        ];

        return $names[$locale];
    }
}
