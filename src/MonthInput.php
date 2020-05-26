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
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
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
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = $value->format('Y-m');
        } else {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = $value;
        }
        return $this;
    }
}
