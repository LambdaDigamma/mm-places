![mm-places](https://banners.beyondco.de/mm-places.png?theme=dark&packageManager=composer+require&packageName=lambdadigamma%2Fmm-places&pattern=architect&style=style_1&description=A+package+providing+places+for+the+Mein+Moers+platform.&md=1&showWatermark=0&fontSize=100px&images=location-marker)

# Handle places for Mein Moers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lambdadigamma/mm-places.svg?style=flat-square)](https://packagist.org/packages/lambdadigamma/mm-places)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lambdadigamma/mm-places/run-tests?label=tests)](https://github.com/lambdadigamma/mm-places/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/lambdadigamma/mm-places.svg?style=flat-square)](https://packagist.org/packages/lambdadigamma/mm-places)

A package providing places for the Mein Moers platform.

## Installation

You can install the package via composer:

```bash
composer require lambdadigamma/mm-places
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="LambdaDigamma\MMPlaces\MMPlacesServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="LambdaDigamma\MMPlaces\MMPlacesServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Lennart Fischer](https://github.com/LambdaDigamma)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
