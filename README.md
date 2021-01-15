# Phel Scaffolding

[Phel](https://phel-lang.org/) is a function programming language that compiles to PHP. 

This repository provides you the basic setup to start coding phel.

## Getting started

1. Clone this repo
2. `composer install`

### Phel code

1. Write your phel code in `src/`
2. Execute your code with `vendor/bin/phel run src/boot.phel`

### Tests

1. Write your phel tests in `tests/`
2. Execute your tests with `vendor/bin/phel tests`


If you create new namespaces, remember to execute the `composer dump-autoload` to auto-generate them inside the [PhelRuntime](/vendor/PhelRuntime.php).

## More about starting with phel

Find more information about how to start with phel in [getting started](https://phel-lang.org/documentation/getting-started/).