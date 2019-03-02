<?php declare(strict_types=1);

namespace Form;

use DateInterval;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;
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
        $this->control->type = 'time';
    }


    /**
     * Load http data.
     */
    public function loadHttpData()
    {
        $this->value = $this->getHttpData(Form::DATA_TEXT) ?: null;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return TimeInput
     */
    public function setValue($value): self
    {
        if ($value instanceof DateInterval) {
            $this->control->value = $value->format('%H:%I');
        } else {
            $this->control->value = DateTime::from($value)->format('H:i');
        }
        return $this;
    }
}
