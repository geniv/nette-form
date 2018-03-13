<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;


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
     * @return ColorInput
     */
    public function setValue($value): self
    {
        $this->control->value = $value;
        return $this;
    }
}
