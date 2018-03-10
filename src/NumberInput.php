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
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'number';
    }


    /**
     * Set step.
     *
     * @param $step
     * @return NumberInput
     */
    public function setStep($step): self
    {
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
        $this->control->max = $max;
        return $this;
    }
}
