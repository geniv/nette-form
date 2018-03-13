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
    private $path, $defaultPath;


    /**
     * ColorInput constructor.
     *
     * @param string|null $caption
     */
    public function __construct(string $caption = null)
    {
        parent::__construct($caption);

        $this->control = Html::el('img', ['src' => null]);
    }


    public function setPath($path, $defaultPath = null)
    {
        $this->path = $path;
        $this->defaultPath = $defaultPath;
    }


    public function setImageSize($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
        return $this;
    }


    /**
     * @param $value
     * @return void|static
     * @throws \Nette\Utils\UnknownImageFileException
     */
    public function setValue($value)
    {
        $this->control->src = ($value ? $this->path . $value : $this->defaultPath);

        if ($value) {
            $img = Image::fromFile($this->path . $value);
            $img->resize($this->width, $this->height);
            $this->hmltImage->src = 'data:image/jpeg;base64,' . base64_encode($img->toString());
        }
    }
}
