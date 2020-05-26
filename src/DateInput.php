<?php declare(strict_types=1);

namespace Form;

use DateInterval;
use Nette\Forms\Controls\TextBase;
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
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->type = 'date';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return DateInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        if ($value instanceof DateInterval) {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = $value->format('%Y-%M-%D');
        } else {
            /** @noinspection PhpUndefinedFieldInspection */
            $this->control->value = DateTime::from($value)->format('Y-m-d');
        }
        return $this;
    }
}
