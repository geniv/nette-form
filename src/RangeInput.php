<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class RangeInput
 *
 * @author  geniv
 * @package Form
 */
class RangeInput extends TextBase
{

    /**
     * RangeInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'range';
    }


    /**
     * Set step.
     *
     * @param $step
     * @return RangeInput
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
     * @return RangeInput
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
     * @return RangeInput
     */
    public function setMax($max): self
    {
        $this->control->max = $max;
        return $this;
    }
}
