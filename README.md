![AI package](https://banners.beyondco.de/AI.png?theme=light&packageManager=composer+require&packageName=dietercoopman%2Fai&pattern=architect&style=style_1&description=A+wrapper+for+openai-php%2Fclient&md=1&showWatermark=0&fontSize=100px&images=code)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dietercoopman/ai.svg?style=flat-square)](https://packagist.org/packages/dietercoopman/ai)
[![Total Downloads](https://img.shields.io/packagist/dt/dietercoopman/ai.svg?style=flat-square)](https://packagist.org/packages/dietercoopman/ai)

# A wrapper for openai-php/client

This packages provides a wrapper around the popular openai-php/client package.  
For this package you need an OpenAI api key

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
    'api_key' => env('OPENAI_API_KEY'),
];
```

## Usage

### Text reviewing 

Review a text, giving the text to the AI and it will return a review of the text.

```php
$text = "Wth ths package you can use the OpenAI API in yr Larvel aplicaton.";

echo Ai::reviewText($text);
//returns 'With this package you can use the OpenAI API in your Laravel application.'
```

### Text translation 

Translate a text to another language

```php
echo Ai::translateTextTo($text, 'french');
//returns 'avec ce package vous pouvez utiliser l'API OpenAI dans votre application Laravel.'
```

### Make text more marketing

Make a text more commercial

```php
echo Ai::marketingText($text);
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
