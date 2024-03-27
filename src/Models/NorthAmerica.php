<?php

namespace Omisai\Continents\Models;

use Omisai\Continents\Continent;

class NorthAmerica extends Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code = "NA";

    /**
     * UN M.49 numeric code
     */
    public string $numeric = "003";

    public static function getName(string $locale = 'en'): string
    {
        self::validate($locale);

        $names = [
            'en' => 'North America',
            'hu' => 'Észak Amerika',
            'de' => 'Nordamerika',
            'es' => 'América del norte',
            'it' => 'Nord America',
            'fr' => 'Amérique du Nord',
        ];

        return $names[$locale];
    }
}
