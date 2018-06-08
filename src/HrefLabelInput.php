<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;


/**
 * Class HrefLabelInput
 *
 * @author  geniv
 * @package Form
 */
class HrefLabelInput extends BaseControl
{

    /**
     * HrefLabelInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);

        $this->label = Html::el('a', ['href' => null]);
        $this->setText($caption);
    }


    /**
     * Set text.
     *
     * @param string $text
     * @return HrefLabelInput
     */
    public function setText(string $text): self
    {
        $this->label->setText($text);
        return $this;
    }


    /**
     * Set href.
     *
     * @param string $href
     * @return HrefLabelInput
     */
    public function setHref(string $href): self
    {
        $this->label->href = $href;
        return $this;
    }


    /**
     * Set confirm.
     *
     * @param string $text
     * @return HrefLabelInput
     */
    public function setConfirm(string $text): self
    {
        $this->label->onClick('return confirm("' . $text . '");');
        return $this;
    }
}
