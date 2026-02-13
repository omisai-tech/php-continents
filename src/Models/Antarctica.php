<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class Antarctica extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = 'AN';

    /**
     * UN M.49 numeric code
     */
    public string $numeric = '010';

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'Antarctica',
            'hu' => 'Antarktisz',
            'de' => 'Antarktis',
            'es' => 'Antártida',
            'it' => 'Antartide',
            'fr' => 'Antarctique',
        ];

        return $names[$locale];
    }
}
