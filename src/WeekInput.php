<?php declare(strict_types=1);

namespace Form;

use DateTime;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;


/**
 * Class WeekInput
 *
 * @author  geniv
 * @package Form
 */
class WeekInput extends TextBase
{

    /**
     * WeekInput constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'week';
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
     * @return WeekInput
     */
    public function setValue($value): self
    {
        if ($value instanceof DateTime) {
            $this->control->value = $value->format('Y-\WW');
        } else {
            $this->control->value = $value;
        }
        return $this;
    }
}
