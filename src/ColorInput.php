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
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
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
     * @return $this|static
     */
    public function setValue($value)
    {
        $this->control->value = $value;
        return $this;
    }
}
