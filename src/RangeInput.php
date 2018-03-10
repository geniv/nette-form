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
}
