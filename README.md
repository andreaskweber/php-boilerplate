# Boilerplate for PHP projects

This project can be used as a boilerplate for PHP projects. Start each new project with a well tested and established tool chain.

## Why should I use this?

- Dedicated environment per php project
- Share your environment with other developers
- Fully preconfigured to kick start your new project
- Use a massive toolchain to make developing a great pleasure

## Getting started

Fetch a copy of this project and launch your virtual machine:

```
vagrant up
vagrant ssh
cd /vagrant
```

After you've booted and connected to your fresh installed and configured virtual machine, you are ready to start coding.

## Features

### Vagrant

[Vagrant](https://www.vagrantup.com) is used to easily bring up your virtual development machine. Use a dedicated environment for each new project.

### Puppet

[Puppet](https://puppetlabs.com/puppet/what-is-puppet) is used to manage your development infrastructure.
Checkout [Puppetfile](resources/vagrant/puppet/Puppetfile) to see which Puppet modules will be installed. You also can customize your machine by editing [site.pp](resources/vagrant/puppet/manifests/site.pp).

#### Host Configuration

- Dotdeb-Repository
- PHP and many PHP modules, development configuration, XDebug
- wget, htop, curl, ant, git
- Europe/Berlin as timezone, NTP timeservers

### Debugging

Preconfigured to debug with ease, using [XDebug](http://xdebug.org).

Call a script using `php-debug script.php` instead of `php script.php` to instruct XDebug to connect to your IDE. 

- [Debug a script with php-debug](docs/images/debug/debug-command.png)
- [XDebug connected with PhpStorm](docs/images/debug/debug-view.png)

You also can use `php-debug-on` and `php-debug-off` to enable and disable the debugger for every script.

- [Enable und disable debugger for every script](docs/images/debug/permanent-alias.png)

To configure PhpStorm to handle incoming XDebug connections you can read this [article](https://www.jetbrains.com/phpstorm/help/configuring-xdebug.html).

### PHP-Unit

In `src/Test` there is a preconfigured setup to use PHP-Unit for TDD with the following features:

- Bootstrap file
- Configured to generate code coverage reports
- DemoClassTest to show how easy you can write tests

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

### Build Targets

Build targets, powered by [ANT](http://ant.apache.org), are used to easily generate code metrics, run unit tests and execute many more recurring tasks.

```
vagrant@boilerplate:/vagrant$ ant
    
  The following commands are available:

  |   +++ Build +++
  |-- build                (Run the build)
  |   |-- dependencies     (Install dependencies)
  |   |-- tests            (Lint all files and run tests)
  |   |-- metrics          (Generate quality metrics)
  |-- cleanup              (Cleanup the build directory)
  |
  |   +++ Composer +++
  |-- composer             -> composer-download, composer-install
  |-- composer-download    (Downloads composer.phar to project)
  |-- composer-install     (Install all dependencies)
  |
  |   +++ Testing +++
  |-- phpunit              -> phpunit-full
  |-- phpunit-tests        (Run unit tests)
  |-- phpunit-full         (Run unit tests and generate code coverage report / logs)
  |
  |   +++ Metrics +++
  |-- coverage             (Show code coverage metric)
  |-- phploc               (Show lines of code metric)
  |-- qa                   (Run quality assurance tools)
  |-- |-- phpcpd           (Show copy paste metric)
  |-- |-- phpcs            (Show code sniffer metric)
  |-- |-- phpmd            (Show mess detector metric)
  |
  |   +++ Metric Reports +++
  |-- phploc-report        (Generate lines of code metric report)
  |-- phpcpd-report        (Generate copy paste metric report)
  |-- phpcs-report         (Generate code sniffer metric report)
  |-- phpmd-report         (Generate mess detector metric report)
  |
  |   +++ Tools +++
  |-- lint                 (Lint all php files)
```

### Dotfiles

- [.gitignore](https://help.github.com/articles/ignoring-files/)
- [.gitattributes](http://git-scm.com/book/it/v2/Customizing-Git-Git-Attributes)
- [.editorconfig](http://editorconfig.org)

## Thoughts
If you know some nice trick to make development more smooth, please let me know.
Pull requests are highly appreciated. Built with love. Hope you'll enjoy.. :-)
