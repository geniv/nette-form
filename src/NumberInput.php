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
}
