# Boilerplate for PHP projects

This project can be used as a boilerplate for PHP projects.

## Why should I use this?

- Dedicated environment per php project
- Share your environment with other developers
- Fully pre configured to kick start your new project
- Use a massive toolchain to make developing a great pleasure

## Getting started 

```
vagrant up
vagrant ssh
cd /vagrant
```

After you've booted and connected to your new installed virtual machine, you are ready to start coding.

## Features

### Vagrant

[Vagrant](https://www.vagrantup.com) is used to easily bring up your virtual development machine.

### Puppet

[Puppet](https://puppetlabs.com/puppet/what-is-puppet) is used to manage your development infrastructure.

### Debugging

Pre-Configured to debug with ease, using [XDebug](http://xdebug.org).

Call a script using `php-debug script.php` instead of `php script.php` to instruct XDebug to connect to your IDE. 

- [Debug a script with php-debug](docs/images/debug/debug-command.png)
- [XDebug connected with PhpStorm](docs/images/debug/debug-view.png)

You also can use a permanent alias to enable debugger for every script.

- [Enable und disable debugger for every script](docs/images/debug/permanent-alias.png)

### Build Targets

Build targets, powered by [ANT](http://ant.apache.org), are used to easily generate code metrics, run unit tests and execute many more recurring tasks.

```
vagrant@boilerplate:/vagrant$ ant

help:
     [echo] 
     [echo] The following commands are available:
     [echo] 
     [echo] |   +++ Build +++
     [echo] |-- build                (Run the build)
     [echo] |   |-- dependencies     (Install dependencies)
     [echo] |   |-- tests            (Lint all files and run tests)
     [echo] |   |-- metrics          (Generate quality metrics)
     [echo] |-- cleanup              (Cleanup the build directory)
     [echo] |
     [echo] |   +++ Composer +++
     [echo] |-- composer             -> composer-download, composer-install
     [echo] |-- composer-download    (Downloads composer.phar to project)
     [echo] |-- composer-install     (Install all dependencies)
     [echo] |
     [echo] |   +++ Testing +++
     [echo] |-- phpunit              -> phpunit-full
     [echo] |-- phpunit-tests        (Run unit tests)
     [echo] |-- phpunit-full         (Run unit tests and generate code coverage report / logs)
     [echo] |
     [echo] |   +++ Metrics +++
     [echo] |-- coverage             (Show code coverage metric)
     [echo] |-- phploc               (Show lines of code metric)
     [echo] |-- qa                   (Run quality assurance tools)
     [echo] |-- |-- phpcpd           (Show copy paste metric)
     [echo] |-- |-- phpcs            (Show code sniffer metric)
     [echo] |-- |-- phpmd            (Show mess detector metric)
     [echo] |
     [echo] |   +++ Metric Reports +++
     [echo] |-- phploc-report        (Generate lines of code metric report)
     [echo] |-- phpcpd-report        (Generate copy paste metric report)
     [echo] |-- phpcs-report         (Generate code sniffer metric report)
     [echo] |-- phpmd-report         (Generate mess detector metric report)
     [echo] |
     [echo] |   +++ Tools +++
     [echo] |-- lint                 (Lint all php files)
```

### Composer

[Composer](https://getcomposer.org) is installed by default. Just call `composer`.

```
vagrant@boilerplate:/vagrant$ composer
   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.0-dev (f10c71475167a4661225b14560ca0a400d730829) 2015-03-29 14:37:42
.
.
.
```

### Dotfiles

- [.gitignore](https://help.github.com/articles/ignoring-files/)
- [.gitattributes](http://git-scm.com/book/it/v2/Customizing-Git-Git-Attributes)
- [.editorconfig](http://editorconfig.org)

## Thoughts
If you know some nice trick to make development more smooth, please let me know.
Pull requests are highly appreciated. Built with love. Hope you'll enjoy.. :-)
