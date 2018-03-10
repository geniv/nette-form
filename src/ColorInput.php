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
        $this->control->type = 'color';
    }
}
