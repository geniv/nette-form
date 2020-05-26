<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class NumberInput
 *
 * @author  geniv
 * @package Form
 */
class NumberInput extends TextBase
{

    /**
     * NumberInput constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->type = 'number';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return NumberInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->value = $value; // return to input
        return $this;
    }


    /**
     * Set step.
     *
     * @param $step
     * @return NumberInput
     */
    public function setStep($step): self
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->step = $step;
        return $this;
    }


    /**
     * Set min.
     *
     * @param $min
     * @return NumberInput
     */
    public function setMin($min): self
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->min = $min;
        return $this;
    }


    /**
     * Set max.
     *
     * @param $max
     * @return NumberInput
     */
    public function setMax($max): self
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->max = $max;
        return $this;
    }
}
