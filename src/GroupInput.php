<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;


/**
 * Class GroupInput
 *
 * @author  geniv
 * @package Form
 */
class GroupInput extends BaseControl
{

    /**
     * LabelInput constructor.
     *
     * @param string|null $caption
     * @param string      $element
     */
    public function __construct(string $caption = null, $element = 'div')
    {
        parent::__construct($caption);
        $this->control = Html::el($element);
        // set manual omitted
        $this->setOmitted(true);
        // internal set type
        $this->setOption('type', 'group');
    }


    /**
     * Begin.
     *
     * @param string $id
     * @return $this
     */
    public function begin(string $id): self
    {
        $this->setOption('id', $id);
        $this->setOption('begin', true);
        return $this;
    }


    /**
     * End.
     *
     * @return $this
     */
    public function end(): self
    {
        $this->setOption('end', true);
        return $this;
    }


    /**
     * Set text.
     *
     * @param string $text
     * @return GroupInput
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
     * @return GroupInput
     */
    public function setValue($value): self
    {
        $this->control->setText($value);
        return $this;
    }
}
