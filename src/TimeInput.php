<?php declare(strict_types=1);

namespace Form;

use DateTime;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;


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
        if ($value instanceof DateTime) {
            $this->control->value = $value->format('H:i');
        } else {
            $this->control->value = $value;
        }
        return $this;
    }
}
