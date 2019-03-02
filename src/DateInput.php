<?php declare(strict_types=1);

namespace Form;

use DateInterval;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;
use Nette\Utils\DateTime;


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
        if ($value instanceof DateInterval) {
            $this->control->value = $value->format('%Y-%M-%D');
        } else {
            $this->control->value = DateTime::from($value)->format('Y-m-d');
        }
        return $this;
    }
}
