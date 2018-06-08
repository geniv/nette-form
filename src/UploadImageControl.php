<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\UploadControl;
use Nette\Utils\Html;
use Thumbnail\Thumbnail;


/**
 * Class UploadImageControl
 *
 * @author  geniv
 * @package Form
 */
class UploadImageControl extends UploadControl
{
    /** @var Html */
    private $htmlImage;
    /** @var string */
    private $path, $height, $width;


    /**
     * UploadImageControl constructor.
     *
     * @param null $label
     * @param bool $multiple
     */
    public function __construct($label = null, $multiple = false)
    {
        parent::__construct($label, $multiple);

        $this->htmlImage = Html::el('img', ['src' => null]);

        $div = Html::el('div');
        $div->addHtml($this->htmlImage);

        $this->setOption('description', $div);
    }


    /**
     * Set path.
     *
     * @param string $path
     * @return UploadImageControl
     */
    public function setPath(string $path): self
    {
        $this->path = $path;
        return $this;
    }


    /**
     * Set image size.
     *
     * @param string|null $height
     * @param string|null $width
     * @return UploadImageControl
     */
    public function setImageSize(string $height = null, string $width = null): self
    {
        $this->height = $height;
        $this->width = $width;
        return $this;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return UploadImageControl
     * @throws \Exception
     */
    public function setValue($value): self
    {
        if ($this->htmlImage) {
            $this->htmlImage->src = Thumbnail::getSrcPath($this->path, $value, $this->width, $this->height);
        }
        return $this;
    }
}
