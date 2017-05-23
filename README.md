# Composer

## What is Composer?
- It is a dependency manager.
- It enables you to declare the libraries you depend on.
- It finds out which versions of which packages can and need to be installed, and installs them (meaning it downloads them into your project).

## How to Installation?
### Install Locally
- Installing Composer locally is a matter of just running the installer in your project directory. See <a href="https://getcomposer.org/download/">the Download page</a> for instructions.
- Now just run `php composer.phar` in order to run Composer.

### Install Globally
- You can place the Composer PHAR anywhere you wish.
- After running the installer following the Download page instructions you can run this to move composer.phar to a directory that is in your path:

```js
mv composer.phar /usr/local/bin/composer
```

## Basic Usage
Suppose, we need `monolog/monolog` as a logging library in our prject.

- To start using Composer in your project, all you need is a `composer.json` file. This file describes the dependencies of your project and may contain other metadata as well.
- Using `require` key, you are simply telling Composer which packages your project depends on.

```js
{
    "require": {
        "monolog/monolog": "1.0.*"
    }
}
```
- `require` takes an object that maps package names (e.g. `monolog/monolog`) to version constraints (e.g. `1.0.*`).
- Composer uses this information to search for the right set of files in package "repositories" that you register using the `repositories` key, or in Packagist, the default package respository. In the above example, since no other repository has been registered in the `composer.json` file, it is assumed that the `monolog/monolog` package is registered on Packagist.
- The package name consists of a vendor name and the project's name. Often these will be identical - the vendor name just exists to prevent naming clashes. For example, it would allow two different people to create a library named `json`. One might be named `igorw/json` while the other might be `seldaek/json`.
- To install the defined dependencies for your project, just run the install command.

```js
php composer.phar install
```
- When Composer has finished installing, it writes all of the packages and the exact versions of them that it downloaded to the `composer.lock` file, locking the project to those specific versions. You should commit the `composer.lock` file to your project repo so that all people working on the project are locked to the same versions of dependencies.

### Example:
I have used 3 libraries in this `basic_usage` learning example project. You can find it here under `learning` folder. 

- I have added `nazmulb/mac-address-php` and `nazmulb/memory-cpu-php` under `require`. `nazmulb/mac-address-php` will install from <a href="https://packagist.org/packages/nazmulb/mac-address-php">Packagist</a> and `nazmulb/memory-cpu-php` will install from my <a href="https://github.com/nazmulb/memory_cpu_usage_php">repository</a>.

- Also added `monolog/monolog` under `require-dev`.

```js
{
    "minimum-stability": "stable",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/nazmulb/memory_cpu_usage_php"
        }
    ],
    "require": {
        "nazmulb/mac-address-php": "dev-master",
        "nazmulb/memory-cpu-php": "dev-master"
    },
    "require-dev": {
        "monolog/monolog": "1.0.*"
    }
}
```
- To add libraries only under `require-dev`, you can run the following command:

```js
php composer.phar require --dev monolog/monolog: 1.0.*
```
- We can also using `init` command to create a `composer.json` from CLI.

```js
php composer.phar init
```

## How to make your own libraries?
Please read <a href="https://getcomposer.org/doc/02-libraries.md">this page</a> to make you own libraries. Thanks!