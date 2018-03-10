<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class TimeInput
 *
 * @author  geniv
 * @package Form
 */
class TimeInput extends TextBase
{

    /**
     * TimeInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'time';
    }
}
