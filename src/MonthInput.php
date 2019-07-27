<?php declare(strict_types=1);

namespace Form;

use DateTime;
use Nette\Forms\Controls\TextBase;


/**
 * Class MonthInput
 *
 * @author  geniv
 * @package Form
 */
class MonthInput extends TextBase
{

    /**
     * MonthInput constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'month';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return MonthInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        if ($value instanceof DateTime) {
            $this->control->value = $value->format('Y-m');
        } else {
            $this->control->value = $value;
        }
        return $this;
    }
}
