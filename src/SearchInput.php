<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\TextBase;
use Nette\Forms\Form;


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
        $this->control->type = 'search';
    }


    /**
     * Load http data.
     */
    public function loadHttpData()
    {
        $this->value = $this->getHttpData(Form::DATA_TEXT) ?: null;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return SearchInput
     */
    public function setValue($value): self
    {
        $this->control->value = $value;
        return $this;
    }
}
