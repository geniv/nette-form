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
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->type = 'search';
    }


    /**
     * Set value.
     *
     * @param $value
     * @return SearchInput
     */
    public function setValue($value): self
    {
        $this->value = $value;
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->value = $value; // return to input
        return $this;
    }
}
