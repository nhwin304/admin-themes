# This is my package admin-themes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nhwin304/admin-themes.svg?style=flat-square)](https://packagist.org/packages/nhwin304/admin-themes)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nhwin304/admin-themes/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nhwin304/admin-themes/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nhwin304/admin-themes/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nhwin304/admin-themes/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nhwin304/admin-themes.svg?style=flat-square)](https://packagist.org/packages/nhwin304/admin-themes)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require nhwin304/admin-themes
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="admin-themes-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="admin-themes-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="admin-themes-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$adminThemes = new Nhwin304\AdminThemes();
echo $adminThemes->echoPhrase('Hello, Nhwin304!');
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

- [Nguyễn Huy Thắng](https://github.com/nhwin304)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
