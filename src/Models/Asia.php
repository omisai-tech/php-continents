<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class Asia extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = "AS";

    /**
     * UN M.49 numeric code
     */
    public string $numeric = "142";

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'Asia',
            'hu' => 'Ázsia',
            'de' => 'Asien',
            'es' => 'Asia',
            'it' => 'Asia',
            'fr' => 'Asie',
        ];

        return $names[$locale];
    }
}
