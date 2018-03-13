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
    private $htmlHref;
    private $height, $width, $path;


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

        $this->setOption('description', $div);
    }


    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }


    public function setImageSize($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
        return $this;
    }


    public function setValue($value)
    {
        if ($this->htmlHref) {
            $this->htmlHref->href = ($value ? $this->path . $value : null);
            $this->htmlHref->setText($value);
        }
    }
}
