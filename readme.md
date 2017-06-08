-------------------------------------
# Dummy Laravel Package



-------------------------------------

1. Clone the repo in a packages/{vendor}/{packagename}
2. Replace "Dummy" and "dummy" with the real package name.   
    Watch for lower and uppercase
3. Replace "Ridrog" and "ridrog" with your vendor name.  
    Watch for lower and uppercase
4. Rename every File from "DummyXxxxxx.php" to "RealPackageNameXxxxxx.php"
5. Autload the package  
    see the hint below
6. Open a terminal at the packages location
    - Run ``` composer install ```
    - Run phpunit ``` vendor/ ??????????```


## Autoload the package 
@composer.json  
``` 
"psr-4": {
    "App\\": "app/",
    "{Vendor}\\{PackageName}\\" : "packages/{vendor}/{packagename}/src"
} 
```


-------------------------------------
---------Delete-this-above-----------


# Readme

[![Build Status](https://travis-ci.org/Ridrog-de/dummy.svg?branch=master)](https://travis-ci.org/Ridrog-de/dummy)
[![Latest Stable Version](https://poser.pugx.org/ridrog/dummy/v/stable)](https://packagist.org/packages/ridrog/dummy)
[![Total Downloads](https://poser.pugx.org/ridrog/dummy/downloads)](https://packagist.org/packages/ridrog/dummy)
[![Latest Unstable Version](https://poser.pugx.org/ridrog/dummy/v/unstable)](https://packagist.org/packages/ridrog/dummy)
[![License](https://poser.pugx.org/ridrog/dummy/license)](https://packagist.org/packages/ridrog/dummy)

 **[Full Documentation](https://ridrog-de.github.io/dummy/)**

## What is this

This is a package that does absolutely nothing.
But it's well tested.

-----------------------------------------------
## Installation

-----------------------------------------------
## Usage

-----------------------------------------------
## Config

-----------------------------------------------
## Details

### Facade


### Routes


### Controllers


### Views


### Middleware


### Migrations


### Seeder


### Commands


### Translation

### Events and Listeners

### Notifications

-----------------------------------------------
## Tests

-----------------------------------------------

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

$ composer test

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email mail@ridrog.de instead of using the issue tracker.

## Credits



## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
