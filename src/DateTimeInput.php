<?php declare(strict_types=1);

namespace Form;

use DateInterval;
use Nette\Forms\Controls\TextBase;
use Nette\Utils\DateTime;


/**
 * Class DateTimeInput
 *
 * @author  geniv
 * @package Form
 */
class DateTimeInput extends TextBase
{

    /**
     * DateTimeInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->type = 'datetime-local';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return DateTimeInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        if ($value instanceof DateInterval) {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = $value->format('%Y-%M-%D\T%H:%I');
        } else {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = DateTime::from($value)->format('Y-m-d\TH:i');
        }
        return $this;
    }
}
