<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class Europe extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = "EU";

    /**
     * UN M.49 numeric code
     */
    public string $numeric = "150";

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'Europe',
            'hu' => 'Európa',
            'de' => 'Europa',
            'es' => 'Europa',
            'it' => 'Europa',
            'fr' => 'L\'Europe',
        ];

        return $names[$locale];
    }
}
