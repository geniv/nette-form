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


    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }


    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
    }


    public function setValue($value)
    {
        $this->control->href = ($this->prefix ?: null) . $value;
        $this->control->setText($this->text ?: $value);
    }
}
