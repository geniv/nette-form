<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\UploadControl;
use Nette\Utils\Html;


/**
 * Class UploadFileControl
 *
 * @author  geniv
 * @package Form
 */
class UploadFileControl extends UploadControl
{
    /** @var Html */
    private $html;
    /** @var string */
    private $path;


    /**
     * UploadFileControl constructor.
     *
     * @param null $label
     * @param bool $multiple
     */
    public function __construct($label = null, bool $multiple = false)
    {
        parent::__construct($label, $multiple);
        $this->html = Html::el('a');
    }


    /**
     * Set path.
     *
     * @param string $path
     * @return UploadFileControl
     */
    public function setPath(string $path): self
    {
        $this->path = $path;
        return $this;
    }


    /**
     * Set target.
     *
     * @param string $target
     * @return UploadFileControl
     */
    public function setTarget(string $target): self
    {
        $this->html->target = $target;
        return $this;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return UploadFileControl
     */
    public function setValue($value): self
    {
        if ($this->path && $value) {
            $this->html->href = ($value ? $this->path . $value : null);
            $this->html->setText($value);
            $div = Html::el('div');
            $div->addHtml($this->html);
            $this->setOption('content', $div);
        }
        return $this;
    }
}
