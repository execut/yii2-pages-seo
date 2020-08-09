# Yii2 module template
Template for yii2 module based on yii2-crud-fields

For license information check the [LICENSE](LICENSE.md)-file.

[![Latest Stable Version](https://poser.pugx.org/execut/yii2-pages-seo/v/stable.png)](https://packagist.org/packages/execut/yii2-pages-seo)
[![Total Downloads](https://poser.pugx.org/execut/yii2-pages-seo/downloads.png)](https://packagist.org/packages/execut/yii2-pages-seo)
[![Build Status](https://travis-ci.com/execut/yii2-pages-seo.svg?branch=master)](https://travis-ci.com/execut/yii2-pages-seo)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require execut/yii2-pages-seo
```

or add

```
"execut/yii2-pages-seo": "dev-master"
```

to the require section of your `composer.json` file.

Usage
----

Add bootstrap to config file:
```php
return [
    'bootstrap' => [
        'pagesSeo' => \execut\pagesSeo\bootstrap\Common::class,
    ]
];
```