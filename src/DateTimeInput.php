<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class DateTimeInput
 *
 * @author  geniv
 * @package Form
 */
class DateTimeInput extends TextBase
{

    /**
     * DateTimeInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'datetime-local';
    }
}
