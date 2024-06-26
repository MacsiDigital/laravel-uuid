# Laravel UUID

##  UUID's on Laravel models

![Header Image](https://github.com/MacsiDigital/repo-design/raw/master/laravel-uuid/header.png)

<p align="center">
 <a href="https://github.com/MacsiDigital/laravel-uuid/actions?query=workflow%3ATests"><img src="https://github.com/MacsiDigital/laravel-uuid/workflows/Tests/badge.svg" style="max-width:100%;"  alt="tests badge"></a>
 <a href="https://packagist.org/packages/macsidigital/laravel-uuid"><img src="https://img.shields.io/packagist/v/macsidigital/laravel-uuid.svg?style=flat-square" alt="version badge"/></a>
 <a href="https://packagist.org/packages/macsidigital/laravel-uuid"><img src="https://img.shields.io/packagist/dt/macsidigital/laravel-uuid.svg?style=flat-square" alt="downloads badge"/></a>
</p>

Laravel UUID, a UUID helper Library

## Support us

We invest a lot in creating [open source packages](https://macsidigital.co.uk/open-source), and would be grateful for a [sponsor](https://github.com/sponsors/MacsiDigital) if you make money from your product that uses them.

## Installation

This package can be used in Laravel 10.0 or higher with PHP 8.0 and higher.  There are older versions which go back to PHP7.4 and Laravel 6.

You can install the package via composer:

``` bash
composer require macsidigital/laravel-uuid
```

## Usage

This is quite a simple package, which can be used to override the primary key to uuid, or to add an additional uuid field, our preferred option to keep an incrementing index.

Add a uuid field

``` php
	// primary key implementation
    $table->uuid('id')->primary();
    
    // or implementation for additional field

    $table->uuid('uuid');  

});
```

Add the trait to get automatic UUID generation

``` php
namespace App\Models;
use Uuid\Traits\GeneratesUuid;

class FakeModel extends Model
{

use GeneratesUuid;

}
```

That's it! unless we use a different column name for the uuid field, then we add the following method.

``` php
	 public function uuidColumn(): string
    {
        return 'id';
    }
});
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security-related issues, please email [info@macsi.co.uk](mailto:info@macsi.co.uk) instead of using the issue tracker.

## Credits

- [Colin Hall](https://github.com/colinhall17)
- [MacsiDigital](https://github.com/MacsiDigital)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
