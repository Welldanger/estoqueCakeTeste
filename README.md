# Estoque plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require welldanger/estoquecaketeste
```
update seu arquivo booststrap php
```

Plugin::load('Estoque', ['bootstrap' => false, 'routes' => true]);
```
Run Migration
```
bin/cake  migrations migrate --plugin Estoque

```