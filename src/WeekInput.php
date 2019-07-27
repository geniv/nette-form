<?php declare(strict_types=1);

namespace Form;

use DateTime;
use Nette\Forms\Controls\TextBase;


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
     * Set value.
     *
     * @param $value
     * @return WeekInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        if ($value instanceof DateTime) {
            $this->control->value = $value->format('Y-\WW');
        } else {
            $this->control->value = $value;
        }
        return $this;
    }
}
