<?php declare(strict_types=1);

namespace Form\Bridges\Nette;

use Form\ColorInput;
use Form\DateInput;
use Form\DateTimeInput;
use Form\GroupInput;
use Form\HrefInput;
use Form\HrefLabelInput;
use Form\ImageControl;
use Form\LabelInput;
use Form\MonthInput;
use Form\NumberInput;
use Form\RangeInput;
use Form\SearchInput;
use Form\TimeInput;
use Form\UploadFileControl;
use Form\UploadImageControl;
use Form\WeekInput;
use Nette\DI\CompilerExtension;
use Nette\Forms\Container;
use Nette\PhpGenerator\ClassType;


/**
 * Class Extension
 *
 * @author  geniv
 * @package Form\Bridges\Nette
 */
class Extension extends CompilerExtension
{

    /**
     * After compile.
     *
     * @param ClassType $class
     */
    public function afterCompile(ClassType $class)
    {
        $initialize = $class->getMethod('initialize');
        $initialize->addBody(self::class . '::register();');
    }


    /**
     * Register.
     */
    public static function register()
    {
        Container::extensionMethod('addDate', function (Container $form, $name, $label = null) {
            return $form[$name] = new DateInput($label);
        });

        Container::extensionMethod('addTime', function (Container $form, $name, $label = null) {
            return $form[$name] = new TimeInput($label);
        });

        Container::extensionMethod('addDateTime', function (Container $form, $name, $label = null) {
            return $form[$name] = new DateTimeInput($label);
        });

        Container::extensionMethod('addWeek', function (Container $form, $name, $label = null) {
            return $form[$name] = new WeekInput($label);
        });

        Container::extensionMethod('addMonth', function (Container $form, $name, $label = null) {
            return $form[$name] = new MonthInput($label);
        });

        Container::extensionMethod('addSearch', function (Container $form, $name, $label = null) {
            return $form[$name] = new SearchInput($label);
        });

        Container::extensionMethod('addNumber', function (Container $form, $name, $label = null) {
            return $form[$name] = new NumberInput($label);
        });

        Container::extensionMethod('addRange', function (Container $form, $name, $label = null) {
            return $form[$name] = new RangeInput($label);
        });

        Container::extensionMethod('addColor', function (Container $form, $name, $label = null) {
            return $form[$name] = new ColorInput($label);
        });

        Container::extensionMethod('addImg', function (Container $form, $name, $label = null) {
            return $form[$name] = new ImageControl($label);
        });

        Container::extensionMethod('addUploadImage', function (Container $form, $name, $label = null, $multiple = false) {
            return $form[$name] = new UploadImageControl($label, $multiple);
        });

        Container::extensionMethod('addUploadFile', function (Container $form, $name, $label = null, $multiple = false) {
            return $form[$name] = new UploadFileControl($label, $multiple);
        });

        Container::extensionMethod('addHref', function (Container $form, $name, $label = null) {
            return $form[$name] = new HrefInput($label);
        });

        Container::extensionMethod('addHrefLabel', function (Container $form, $name, $label = null) {
            return $form[$name] = new HrefLabelInput($label);
        });

        Container::extensionMethod('addLabel', function (Container $form, $name, $label = null) {
            return $form[$name] = new LabelInput($label);
        });

        Container::extensionMethod('setGroup', function (Container $form, $name, $label = null) {
            return $form[$name] = new GroupInput($label);
        });
    }
}
