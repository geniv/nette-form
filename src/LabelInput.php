<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;


/**
 * Class LabelInput
 *
 * @author  geniv
 * @package Form
 */
class LabelInput extends BaseControl
{

    /**
     * LabelInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);

        $this->control = Html::el('span');
    }


    /**
     * Set text.
     *
     * @param string $text
     * @return LabelInput
     */
    public function setText(string $text): self
    {
        $this->control->setText($text);
        return $this;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return LabelInput
     */
    public function setValue($value): self
    {
        $this->control->setText($value);
        return $this;
    }
}
