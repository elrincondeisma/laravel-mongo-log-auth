
Laravel Authentication Log is a package which tracks your user's authentication information such as login/logout time, IP, Browser, Location, etc. as well as sends out notifications via mail, slack, or sms for new devices and failed logins.

## Documentation, Installation, and Usage Instructions


## Version Compatibility

 Laravel  | Authentication Log
:---------|:------------------
 8.x      | 1.x
 9.x      | 2.x
 10.x     | 3.x

## Installation

```bash
composer require elrincondeisma/laravel-mongo-log-auth
```

## Publish Config
```bash
php artisan vendor:publish --provider="Elrincondeisma\LaravelMongoLogAuth\LaravelMongoLogAuthServiceProvider" --tag="authentication-log-config"
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

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
