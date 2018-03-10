<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;


/**
 * Class SearchInput
 *
 * @author  geniv
 * @package Form
 */
class SearchInput extends TextBase
{

    /**
     * SearchInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);
        $this->control->type = 'search';
    }
}
