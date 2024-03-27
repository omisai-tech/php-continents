<?php

namespace Omisai\Continents;

abstract class Continent
{
    /**
     * Non-standardized alpha-2 code
     */
    public string $code;

    /**
     * UN M.49 numeric code
     */
    public string $numeric;

    abstract public static function getName(string $locale = 'en');

    public static function validate(string $locale = 'en'): void
    {
        $allowedLocales = ['en', 'hu', 'de', 'es', 'it', 'fr'];
        if (!in_array($locale, $allowedLocales)) {
            throw new \InvalidArgumentException("Invalid locale: $locale");
        }
    }

    public function __toString()
    {
        return self::getName();
    }

    public function __get($property)
    {
        if (method_exists($this, $method = 'get' . ucfirst($property))) {
            return $this->$method();
        }

        trigger_error('Undefined property: ' . $property, E_USER_ERROR);
        return null;
    }
}
