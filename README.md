# Laravel Time Helpers
![Laravel time helpers logo](docs/Laravel-Time-Helpers.png)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mateusjunges/laravel-time-helpers.svg?style=flat)](https://packagist.org/packages/mateusjunges/laravel-time-helpers)
[![Total Downloads](https://img.shields.io/packagist/dt/mateusjunges/laravel-time-helpers.svg?style=flat)](https://packagist.org/packages/mateusjunges/laravel-time-helpers)
![](https://github.com/mateusjunges/laravel-time-helpers/workflows/Continuous%20Integration/badge.svg)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)
[![StyleCI](https://styleci.io/repos/314837569/shield)](https://styleci.io/repos/314837569)

This package provides two simple helpers to deal with time.

## Installation

To install this package, use this command:

```bash
composer require mateusjunges/laravel-time-helpers
```


## The `past` function

The `past` function, as the time suggests, returns a time in the past.

You can use it and chain with the following methods:

- `past(10)->seconds()`: Returns a Carbon instance 10 seconds in the past
- `past(10)->minutes()`: Returns a Carbon instance 10 minutes in the past
- `past(10)->hours()`: Returns a Carbon instance 10 hours in the past
- `past(10)->weeks()`: Returns a Carbon instance 10 weeks in the past
- `past(10)->weekDays()`: Returns a Carbon instance 10 week days in the past
- `past(10)->months()`: Returns a Carbon instance 10 months in the past
- `past(10)->years()`: Returns a Carbon instance 10 years in the past
- `past(10)->centuries()`: Returns a Carbon instance 10 centuries in the past


## The `in` function

The `in` function can be used to get a Carbon instance in the future.

You can chain it with the exact same methods used in the `past` function:

- `in(10)->seconds()`: Returns a Carbon instance 10 seconds in the future
- `in(10)->minutes()`: Returns a Carbon instance 10 minutes in the future
- `in(10)->hours()`: Returns a Carbon instance 10 hours in the future
- `in(10)->weeks()`: Returns a Carbon instance 10 weeks in the future
- `in(10)->weekDays()`: Returns a Carbon instance 10 week days in the future
- `in(10)->months()`: Returns a Carbon instance 10 months in the future
- `in(10)->years()`: Returns a Carbon instance 10 years in the future
- `in(10)->centuries()`: Returns a Carbon instance 10 centuries in the future

All methods returns a `Carbon\Carbon` instance, which means you will still be able 
to use all the `Carbon` methods.

## Test
To test this package, run `composer test`

## Contributing
Thanks for considering contributing for this package! The contribution guide can be found [here][contributing].

## Changelog
Please see the [changelog] for more information about the changes on this package.

## Credits
- [Mateus Junges][twitter]

## License

The Laravel Time Helper package is open-sourced software licensed under the [MIT License][mit]. Please, see the [license file][license-file] 
for more information.


[mit]: https://opensource.org/licenses/MIT
[license-file]: https://github.com/mateusjunges/laravel-time-helpers/blob/master/LICENSE
[twitter]: https://twitter.com/mateusjungess
[changelog]: https://github.com/mateusjunges/laravel-time-helpers/blob/master/CHANGELOG.md
[contributing]: https://github.com/mateusjunges/laravel-time-helpers/blob/master/.github/CONTRIBUTING.md
[code-of-conduct]: https://github.com/mateusjunges/laravel-time-helpers/blob/master/.github/CODE_OF_CONDUCT.md
