<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;


/**
 * Class HrefInput
 *
 * @author  geniv
 * @package Form
 */
class HrefInput extends BaseControl
{
    /** @var string */
    private $prefix, $text;


    /**
     * HrefInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);

        $this->control = Html::el('a', ['href' => null]);
    }


    /**
     * Set prefix.
     *
     * @param string $prefix
     * @return HrefInput
     */
    public function setPrefix(string $prefix): self
    {
        $this->prefix = $prefix;
        return $this;
    }


    /**
     * Set text.
     *
     * @param string $text
     * @return HrefInput
     */
    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return HrefInput
     */
    public function setValue($value): self
    {
        $this->control->href = ($this->prefix ?: null) . $value;
        $this->control->setText($this->text ?: $value);
        return $this;
    }
}
