<?php declare(strict_types=1);

namespace Form;

use DateInterval;
use Nette\Forms\Controls\TextBase;
use Nette\Utils\DateTime;


/**
 * Class TimeInput
 *
 * @author  geniv
 * @package Form
 */
class TimeInput extends TextBase
{

    /**
     * TimeInput constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->type = 'time';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return TimeInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        if ($value instanceof DateInterval) {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = $value->format('%H:%I');
        } else {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = DateTime::from($value)->format('H:i');
        }
        return $this;
    }
}
