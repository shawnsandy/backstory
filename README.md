# Backstory (beta)

### Tell Your Story.

Backstory is a Laravel package for creating and editing, content in your laravel application.

## Features

- Easily integrate into your application
- WYSIWYG editor powered by CKEditor
- Simple and easy image management
- Dynamic on the fly image resizing using [PHPGlide](http://glide.thephpleague.com/)
- OEMBED support
- Easy to customize
- more features coming soon.

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

composer require shawnsandy/backstory dev-master

```

### In Laravel 5.5 and higher the package automatically installs itself. If you are running Laravel 5.4 or earlier please follow the instructions below.

* Add the provider to your `config\app.php` providers.

```
ShawnSandy\Backstory\BackstoryServiceProvider::class,
```

* Add the facade to your `config/app.php` alias.

```
"Backstory" => ShawnSandy\Backstory\BackstoryFacade::class,
```

### Routes

* Add the route(s) to your `routes\web.php`

``` php

Backstory::routes();

```

__Optional Routes__

``` php

   Route::view("create-story", "backstory::create");

	Route::get("update-story/{id}", function($id) {

		$model = Story::with(['author', 'categories'])->where("id", $id)->first();
		return  view("backstory::update", compact('model'));

	});

Route::get("stories", function() {
    $stories = backstory()->latestStories();

 return view("backstory::index", compact('stories'));
});

Route::get('/story/category/{id}', function($id){

    $stories = Story::hasCategory($id)
    ->paginate(config('backstory.stories_per_page'));

    return view("backstory::index", compact('stories'));

});

```

### Images Driver

Add the images driver to the `config\filesystem.php`

``` php

    'images' => [
    'driver' => 'local',
    'root' => base_path('/public'),
    'url' => env('APP_URL').'/public',
    'visibility' => 'public',

```

### Publish vendor assets files

* Publish vendor assets and files

```
php artisan vendor:publish --tag=backstory-assets
```

```
php artisan vendor:publish --tag=backstory-vendor-assets
```

### Migrate

Run php artisan migrate to setup backstory tables

```
php artisan migrate
```

### Traits

Add the following traits to your `App/User.php`

```
User extends Authenticatable {
  use  Storify, HasRolesAndAbilities;
    ...
}
```

### Dependencies

Backstory requires the following dependencies

__Img FLY__

Install ImgFly - adds dynamic image resizing [download and full instructions](https://github.com/shawnsandy/img-fly)

Installs using composer repositories add the following to your `composer.json` file

``` php

"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/shawnsandy/img-fly"
        }
    ],

```
- Run the composer require to install the package

```
composer require shawnsandy/img-fly dev-master
```

__Larvel Blade Directives__

- Install info [please check the repo](https://github.com/appstract/laravel-blade-directives)

``` php
composer require appstract/laravel-blade-directives
```

__Scripts / Styles__

- When adding Backstory to your custom pages add the following to your page `umbrellajs` and custom scripts to your layout blade

``` blade
<script src="https://cdn.jsdelivr.net/npm/umbrellajs@2.9.0/umbrella.min.js"></script>
    @stack('scripts')
    @stack('inline-scripts')
```

- Include the scripts on your editor / update blade (view)

``` php
    @include("backstory::partials.scripts")
```

### Demo / Usage

Backstory comes with a prebuilt sample of the application that you can use to demo its functionalities and features. Dive the code for examples on how to integrate backstory in your app (tutorials coming soon).

- Once installed you can view and create articles by visiting `yourapp.com/stories`
- Click the create new story button
- Before you create your story add some categories-- hit `add categories` button and add a coupe categories before you continue.
- Now go ahead got ahead and create your story

## TODO

- [ ] Add restful api for stories
- [ ] Ajaxify / Reactive forms
- [ ] Add vue/react components
- [ ] Bootstrap 4 views
- [ ] Improve the docs

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email `shawnsandy04@gmail.com` instead of using the issue tracker.

## Credits

- [Shawn Sandy](http://shawnsandy.design)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
