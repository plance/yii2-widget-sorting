Yii2 widget sorting data
==============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist plance/yii2-widget-sort "*"
```

or add

```
"plance/yii2-widget-sort": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
Sort::widget([
	'items'	=> [
		1 => 'Title 1',
		2 => 'Title 2',
		3 => 'Title 3',
		4 => 'Title 4',
	],
	'empty'	=> 'The recording for sorting missing',
	'button'=> 'save',
])

```