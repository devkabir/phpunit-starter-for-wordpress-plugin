# PHPUnit Starter for WordPress Plugin

This repository provides a starter kit for unit testing WordPress plugins using PHPUnit.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.


## Features

**Travis CI Configuration**

A ready to use `.travis.yml` configured with a reasonable test matrix
- Includes all currently supported versions of PHP (7.4 and 8.0) and the current WP minimum required PHP 5.6
- Tests against the latest version of WordPress, as well as an older version (4.9) although it could be easily extended to include multiple older versions, multisite, etc.

**Just Add Tests**

This project includes a working example `test-example.php` test case. Adding tests is as simple as adding methods to this example class! Getting up and running couldn't be easier.

## Local Development

1. Clone the repository
```sh
git clone https://github.com/devkabir/phpunit-starter-for-wordpress-plugin.git
```
2. Install Composer dependencies

```sh
composer install
```

3. Navigate to the plugin directory
```sh
cd phpunit-starter-for-wordpress-plugin
```

3. Create a database for your tests to use and update your `tests/wp-config.php` as necessary.

```sh
mysqladmin create wp_phpunit_tests -u root
```

The database name defaults to `wp_phpunit_tests`, but you can change this in the `tests/wp-config.php` without affecting the Travis configuration which is environment variable-based.

4. Run the tests

```sh
composer test
```
