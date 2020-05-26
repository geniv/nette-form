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
     * Set href.
     *
     * @param string $href
     * @return HrefInput
     */
    public function setHref(string $href): self
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->href = $href;
        return $this;
    }


    /**
     * Set target.
     *
     * @param string $target
     * @return HrefInput
     */
    public function setTarget(string $target): self
    {
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->target = $target;
        return $this;
    }


    /**
     * Set confirm.
     *
     * @param string $text
     * @return HrefInput
     */
    public function setConfirm(string $text): self
    {
        $this->control->onclick('return confirm(\'' . $text . '\');');
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
        /** @noinspection PhpUndefinedFieldInspection */
        $this->control->href = ($this->prefix ?: null) . $value;
        $this->control->setText($this->text ?: $value);
        return $this;
    }
}
