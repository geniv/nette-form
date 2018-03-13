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
"geniv/nette-form": ">=1.0.0"
```

require:
```json
"php": ">=7.0.0",
"nette/nette": ">=2.4.0"
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
$form->addRange($name, $label = null);
$form->addColor($name, $label = null);
$form->addImg($name, $label = null);
$form->addUploadImage($name, $label = null, $multiple = false);
```
