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
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
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
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->value = $value;
        return $this;
    }
}
