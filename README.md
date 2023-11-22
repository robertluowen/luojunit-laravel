<h1 align="center"> luojunit-laravel </h1>

<p align="center"> A simplified version of the laravel framework unit test.</p>


## Installing

```shell
$ composer require robertluowen/luojunit-laravel -vvv
```

## Usage

Laravel >= 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

## Contributing

You can contribute in one of three ways:

解析路由
```php
Route::get('/', 'LuojunitController@index');
Route::post('/', 'LuojunitController@store')->name('junit.store');
```

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT