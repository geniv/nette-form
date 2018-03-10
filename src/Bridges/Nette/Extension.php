<?php declare(strict_types=1);

namespace Form\Bridges\Nette;

use Form\DateInput;
use Form\DateTimeInput;
use Form\MonthInput;
use Form\NumberInput;
use Form\RangeInput;
use Form\SearchInput;
use Form\TimeInput;
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
    }
}
