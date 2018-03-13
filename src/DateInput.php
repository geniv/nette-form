<?php declare(strict_types=1);

namespace Form;

use DateTime;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;


/**
 * Class DateInput
 *
 * @author  geniv
 * @package Form
 */
class DateInput extends TextBase
{

    /**
     * DateInput constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'date';
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
     * @return DateInput
     */
    public function setValue($value): self
    {
        if ($value instanceof DateTime) {
            $this->control->value = $value->format('Y-m-d');
        } else {
            $this->control->value = $value;
        }
        return $this;
    }
}
