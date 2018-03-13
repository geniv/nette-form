<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\UploadControl;
use Nette\Utils\Html;
use Nette\Utils\Image;


/**
 * Class UploadImageControl
 *
 * @author  geniv
 * @package Form
 */
class UploadImageControl extends UploadControl
{
    private $htmlImage;
    private $height, $width, $path, $defaultPath;


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
     * @param null   $defaultPath
     * @return UploadImageControl
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
     * @return UploadImageControl
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
     * @return UploadImageControl
     * @throws \Nette\Utils\UnknownImageFileException
     */
    public function setValue($value): self
    {
        if ($this->htmlImage) {
            $this->htmlImage->src = ($value ? $this->path . $value : $this->defaultPath);

            if ($value) {
                $img = Image::fromFile($this->path . $value);
                $img->resize($this->width, $this->height);
                $this->htmlImage->src = 'data:image/jpeg;base64,' . base64_encode($img->toString());
            }
        }
        return $this;
    }
}
