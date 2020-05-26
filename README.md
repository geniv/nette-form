Form
====

inspired by forms extension
- https://github.com/nextras/forms
- https://github.com/Kdyby/FormsReplicator

html5 elements:
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/date
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/datetime-local
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/time
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/week
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/month
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/search
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/number
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/range
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/color

Installation
------------

```sh
$ composer require geniv/nette-form
```
or
```json
"geniv/nette-form": "^1.1"
```

require:
```json
"php": ">=7.0",
"nette/application": ">=2.4",
"nette/di": ">=2.4",
"nette/forms": ">=2.4",
"nette/utils": ">=2.4",
"nette/php-generator": ">=2.4",
"geniv/nette-thumbnail": ">=1.0"
```

Include in application
----------------------

neon configure extension:
```neon
extensions:
    - Form\Bridges\Nette\Extension
```

presenters:
```php
$form->addDate($name, $label = null);
$form->addTime($name, $label = null);
$form->addDateTime($name, $label = null);
$form->addWeek($name, $label = null);
$form->addMonth($name, $label = null);
$form->addSearch($name, $label = null);
$form->addNumber($name, $label = null);

$form->addRange($name, $label = null)
    ->setStep($step)
    ->setMin($min)
    ->setMax($max)
    ->setValue($value);

$form->addColor($name, $label = null);

// use Thumbnail class
$form->addImg($name, $label = null)
    ->setPath(string $path, string $baseUrl = null)
    ->setImageSize(string $width = null, string $height = null, array $flags = [], int $quality = null)
    ->setValue($value);

// use Thumbnail class
$form->addUploadImage($name, $label = null, $multiple = false)
    ->setPath(string $path, string $baseUrl = null)
    ->setImageSize(string $width = null, string $height = null, array $flags = [], int $quality = null)
    ->setValue($value);

$form->addUploadFile($name, $label = null, $multiple = false)
    ->setPath(string $relativePath, string $absolutePath)
    ->setTarget(string $target)
    ->setValue($value);

$form->addHref($name, $label = null)
    ->setPrefix(string $prefix)
    ->setText(string $text)
    ->setHref(string $href)
    ->setTarget(string $target)
    ->setConfirm(string $text);

$form->addHrefLabel($name, $label = null)
    ->setText(string $text)
    ->setHref(string $href)
    ->setTarget(string $target)
    ->setConfirm(string $text);

$form->addLabel($name, $label = null, $element = 'div')
    ->setText(string $text);

$form->setGroup($name, $label = null, $element = 'div')
    ->begin(string $id)
    ->end();
```

usage for `addUploadImage`, `addUploadFile`, in default Nette renderer does not function:
```latte
{label cover_image /}
{input cover_image, class=>"form-control"}

{$form['cover_image']->getOption('content')}
{$form['cover_image']->getOption('path')}
```
