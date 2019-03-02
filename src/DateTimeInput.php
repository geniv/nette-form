<?php declare(strict_types=1);

namespace Form;

use DateInterval;
use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;
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
        $this->control->type = 'datetime-local';
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
     * @return DateTimeInput
     */
    public function setValue($value): self
    {
        if ($value instanceof DateInterval) {
            $this->control->value = $value->format('%Y-%M-%D\T%H:%I');
        } else {
            $this->control->value = DateTime::from($value)->format('Y-m-d\TH:i');
        }
        return $this;
    }
}
