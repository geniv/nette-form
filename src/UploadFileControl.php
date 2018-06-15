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
    private $htmlHref;
    /** @var string */
    private $path;


    /**
     * UploadFileControl constructor.
     *
     * @param null $label
     * @param bool $multiple
     */
    public function __construct($label = null, $multiple = false)
    {
        parent::__construct($label, $multiple);

        $this->htmlHref = Html::el('a', ['href' => null]);

        $div = Html::el('div');
        $div->addHtml($this->htmlHref);
//FIXME duplikuje description
        $this->setOption('description', $div);
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
     * Set value.
     *
     * @param $value
     * @return UploadFileControl
     */
    public function setValue($value): self
    {
        if ($this->htmlHref) {
            $this->htmlHref->href = ($value ? $this->path . $value : null);
            $this->htmlHref->setText($value);
        }
        return $this;
    }
}
