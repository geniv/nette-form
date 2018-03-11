<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class MonthInput
 *
 * @author  geniv
 * @package Form
 */
class MonthInput extends TextBase
{

    /**
     * MonthInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'month';
    }
}