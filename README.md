# Backstory

Create and edit, post, blogs, podcast or news, a smart way to      tell your story.



## Install

- Installs using composer repositories add the following to your composer.json file

``` json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/shawnsandy/backstory"
        }
    ],
```
- Run the composer require to install the package
``` bash
composer require shawnsandy/img-fly
```

### In Laravel 5.5 and higher the package automatically installs itself. If you are running Laravel  5.4 or earlier please follow the instructions below.

* Add the provider to your `config\app.php` providers.

```
ShawnSandy\Backstory\BackstoryServiceProvider::class,
```

* Add the facade to your `config\app.php` alias.

```
"Backstory" => ShawnSandy\Backstory\BackstoryFacade::class,
```

### Routes

* Add the route to your `routes\web.php`

``` php
Backstory::routes();
```
## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Sandy][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

