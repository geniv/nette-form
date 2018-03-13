<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;
use Nette\Utils\Image;


/**
 * Class ImageElement
 *
 * @author  geniv
 * @package Form
 */
class ImageElement extends BaseControl
{
    /** @var string */
    private $path, $defaultPath;


    /**
     * ImageElement constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);

        $this->control = Html::el('img', ['src' => null]);
    }


    /**
     * Set path.
     *
     * @param string $path
     * @param null   $defaultPath
     * @return ImageElement
     */
    public function setPath(string $path, $defaultPath = null): self
    {
        $this->path = $path;
        $this->defaultPath = $defaultPath;
        return $this;
    }


    /**
     * Set image size.
     *
     * @param $height
     * @param $width
     * @return ImageElement
     */
    public function setImageSize($height, $width): self
    {
        $this->height = $height;
        $this->width = $width;
        return $this;
    }


    /**
     * Set value.
     *
     * @param $value
     * @return ImageElement
     * @throws \Nette\Utils\UnknownImageFileException
     */
    public function setValue($value): self
    {
        $this->control->src = ($value ? $this->path . $value : $this->defaultPath);

        if ($value) {
            $img = Image::fromFile($this->path . $value);
            $img->resize($this->width, $this->height);
            $this->hmltImage->src = 'data:image/jpeg;base64,' . base64_encode($img->toString());
        }
        return $this;
    }
}
