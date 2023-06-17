# Simple AI package for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dietercoopman/ai.svg?style=flat-square)](https://packagist.org/packages/dietercoopman/ai)
[![Total Downloads](https://img.shields.io/packagist/dt/dietercoopman/ai.svg?style=flat-square)](https://packagist.org/packages/dietercoopman/ai)

This packages provides a wrapper around the popular openai-php/client package.  

## Installation

You can install the package via composer:

```bash
composer require dietercoopman/ai
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="ai-config"
```

This is the contents of the published config file:

```php
return [
    'source_language' => 'english',
];
```

## Usage

```php
$ai = new Dietercoopman\Ai();
echo $ai->echoPhrase('Hello, Dietercoopman!');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dieter Coopman](https://github.com/dietercoopman)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
