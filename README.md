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

After you've connected to your new installed virtual machine, you are ready to start coding.

## Features

### Vagrant

[Vagrant](https://www.vagrantup.com) is used to easily bring up your virtual development machine.

### Puppet

[Puppet](https://puppetlabs.com/puppet/what-is-puppet) is used to manage your development infrastructure.

### Debugging

Pre-Configured to debug with ease, using [Xdebug](http://xdebug.org).  

### Build Targets

Build targets, powered by [ANT](http://ant.apache.org), are used to easily generate code metrics, run unit tests and execute many more recurring tasks.

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
