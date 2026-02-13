[![License](https://img.shields.io/packagist/l/omisai/php-continents?style=for-the-badge)](https://packagist.org/packages/omisai/omisai/php-continents)
[![Latest Stable Version](https://img.shields.io/packagist/v/omisai/php-continents?style=for-the-badge)](https://packagist.org/packages/omisai/php-continents)
[![PHP Version Require](https://img.shields.io/packagist/dependency-v/omisai/php-continents/php?style=for-the-badge)](https://packagist.org/packages/omisai/php-continents)
[![Test](https://github.com/omisai-tech/php-continents/actions/workflows/test.yml/badge.svg)](https://github.com/omisai-tech/php-continents/actions/workflows/test.yml)

# PHP Continents Package

The PHP Continents Package provides a convenient and object-oriented approach to working with continent data. Designed to integrate continent information into any PHP applications with ease. This package offers easy access to continent names, non-standardized alpha-2 codes and UN M.49 numeric codes. Eventually, more detailed geographical data is coming like subregions and extra locales.

## Features

- Easy retrieval of continent names and codes.
- Object-Oriented Programming (OOP) approach for better data management and integration.
- Lightweight and simple to integrate into any PHP project. (8.1+)
- Currently supporting English, Hungarian, German, Spanish, Italian and French languages.
- Future support for subregions and multiple locales, making it versatile for international applications.

## Installation

The PHP Continents Package can be easily installed via Composer.

```bash
composer require omisai/php-continents
```

## Usage

After installing the package, you can begin to work with continent data. You can work with any continent model or access all of them through a Collection.

```php

/**
 * Access through the Collection
 *
 * Consider using the Collection class, if you
 * plan to register it to a service container.
 * It eagerly loads all the continents.
 */
use Omisai\Continents\Collection;

$collection = new Collection();
$continents = $collection->getContinents();

/**
 * Shorthand to use the default english locale
 */
$continents[0]->name; // "Asia"

/**
 * Or using different locale
 */
$continents[0]->getName('fr'); // "Asie"


/**
 * Search for continent based on alpha-2 code
 */
$collection->getContinentByCode('OC'); // Omisai\Continents\Models\Oceania

/**
 * Search for continent based on UN M.49 numeric code
 */
$collection->getContinentByNumeric('010'); // Omisai\Continents\Models\Antarctica


/**
 * Use any continent directly
 */
use Omisai\Continents\Models\Europe;

$europe = new Europe();
$europe->numeric; // "150"
$europe->code; // "EU"

```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```bash
./vendor/bin/pest

# or

composer test
```

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details on how to contribute to this project.

## Security

Please see [SECURITY.md](.github/SECURITY.md) for details on reporting security vulnerabilities.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).

## Sponsoring

If you find this package useful, please consider sponsoring the development: [Sponsoring on GitHub](https://github.com/sponsors/omisai-tech)

Your support helps us maintain and improve this open-source project!