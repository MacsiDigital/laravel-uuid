# Laravel UUID

Laravel UUID, a UUID helper Library

### Installation

This package can be used in Laravel 6.0 or higher.

You can install the package via composer:

``` bash
composer require spatie/laravel-uuid
```

This is quite a simple package, which can be used to override teh primary key to uuid, or to add an additional uuid field, our prefered option to keep an incrementing index.

Add a uuid field

``` php
	// primary key implementation
    $table->uuid('id')->primary();
    
    // or implementation for additional field

    $table->uuid('uuid');  

});
```

Thats it! unless we use a different column name to uuid for the uuid field, then do thisdd teh following method

``` php
	 public function uuidColumn(): string
    {
        return 'id';
    }
});
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email colin@macsi.co.uk instead of using the issue tracker.

## Credits

- [Macsi Digital](https://github.com/macsidigital)
- [Colin Hall](https://github.com/colinhall17)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.