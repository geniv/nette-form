<?php declare(strict_types=1);

namespace Form\Bridges\Nette;

use Form\ColorInput;
use Form\DateInput;
use Form\DateTimeInput;
use Form\HrefInput;
use Form\ImageElement;
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
use Nette\Utils\ObjectMixin;


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
        ObjectMixin::setExtensionMethod(Container::class, 'addDate', function (Container $container, $name, $label = null) {
            return $container[$name] = new DateInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addTime', function (Container $container, $name, $label = null) {
            return $container[$name] = new TimeInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addDateTime', function (Container $container, $name, $label = null) {
            return $container[$name] = new DateTimeInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addWeek', function (Container $container, $name, $label = null) {
            return $container[$name] = new WeekInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addMonth', function (Container $container, $name, $label = null) {
            return $container[$name] = new MonthInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addSearch', function (Container $container, $name, $label = null) {
            return $container[$name] = new SearchInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addNumber', function (Container $container, $name, $label = null) {
            return $container[$name] = new NumberInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addRange', function (Container $container, $name, $label = null) {
            return $container[$name] = new RangeInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addColor', function (Container $container, $name, $label = null) {
            return $container[$name] = new ColorInput($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addImg', function (Container $container, $name, $label = null) {
            return $container[$name] = new ImageElement($label);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addUploadImage', function (Container $container, $name, $label = null, $multiple = false) {
            return $container[$name] = new UploadImageControl($label, $multiple);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addUploadFile', function (Container $container, $name, $label = null, $multiple = false) {
            return $container[$name] = new UploadFileControl($label, $multiple);
        });

        ObjectMixin::setExtensionMethod(Container::class, 'addHref', function (Container $container, $name, $label = null) {
            return $container[$name] = new HrefInput($label);
        });
    }
}
