yii2 bootstrap datetime picker
==============================
Yet another bootstrap datetime picker plugin for UNIX Timestamp (Only for UNIX Timestamp fields!)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist udokmeci/yii2-bootstrap-datetime-picker "*"
```

or add

```
"udokmeci/yii2-bootstrap-datetime-picker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

<?= $form->field($model, 'date')->widget(\udokmeci\bdtp\DateTimePicker::className(), [
	'pluginOptions'=>[
		'inline'=>true,
	],
	'events'=>[
		'dp.show'=>"function(e){console.log(e);}"
	]
]) ?>

```