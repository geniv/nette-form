Form
====

inspired by forms extension
- https://github.com/nextras/forms
- https://github.com/Kdyby/FormsReplicator

html5 elements:
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/date
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/datetime-local
- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/time

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
$form->addDate('name', 'label');
$form->addTime('name', 'label');
$form->addDateTime('name', 'label');
```
