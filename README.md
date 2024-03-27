[![Latest Stable Version](http://poser.pugx.org/omisai/php-continents/v)](https://packagist.org/packages/omisai/php-continents)
[![Latest Unstable Version](http://poser.pugx.org/omisai/php-continents/v/unstable)](https://packagist.org/packages/omisai/php-continents)
[![License](http://poser.pugx.org/omisai/php-continents/license)](https://packagist.org/packages/omisai/php-continents)
[![PHP Version Require](http://poser.pugx.org/omisai/php-continents/require/php)](https://packagist.org/packages/omisai/php-continents)

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

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Testing

```bash
./vendor/bin/pest

# or

composer test
```


## Security

If you discover any security-related issues, please email [security@omisai.com](mailto:security@omisai.com) instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.