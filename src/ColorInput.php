<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class ColorInput
 *
 * @author  geniv
 * @package Form
 */
class ColorInput extends TextBase
{

    /**
     * ColorInput constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'color';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return ColorInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        $this->control->value = $value;
        return $this;
    }
}
