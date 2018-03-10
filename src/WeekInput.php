<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class WeekInput
 *
 * @author  geniv
 * @package Form
 */
class WeekInput extends TextBase
{

    /**
     * WeekInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'week';
    }
}
