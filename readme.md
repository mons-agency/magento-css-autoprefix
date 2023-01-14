# Magento 2 - CSS autoprefix postprocessor module

This module parses CSS generated by Magento 2 themes and adds vendor prefixes to CSS rules using `padaliyajay/php-autoprefixer` library.

## Installation

1. Install module via composer `composer require mons/magento-css-autoprefix`
2. Register module `php bin/magento setup:upgrade`

## Tested working with

* Magento 2.4
* PHP 8.1

## Contribution

* Fork this repository
* Create your feature branch (`git checkout -b feature/your-new-feature`) or a bugfix branch (`git checkout -b bugfix/bug-short-description`) *always* from `develop`
* Commit and submit a new Pull Request