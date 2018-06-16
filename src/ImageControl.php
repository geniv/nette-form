<?php declare(strict_types=1);

namespace Form;

use Nette\Forms\Controls\BaseControl;
use Nette\Utils\Html;
use Thumbnail\Thumbnail;


/**
 * Class ImageControl
 *
 * @author  geniv
 * @package Form
 */
class ImageControl extends BaseControl
{
    /** @var string */
    private $path, $height, $width;


    /**
     * ImageControl constructor.
     *
     * @param null $caption
     */
    public function __construct($caption = null)
    {
        parent::__construct($caption);
        // set manual omitted
        $this->setOmitted(true);
    }


    /**
     * Set path.
     *
     * @param string $path
     * @return ImageControl
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
     * @return ImageControl
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
     * @return ImageControl
     * @throws \Exception
     */
    public function setValue($value): self
    {
        if ($this->path && $value) {
            $this->control = Html::el('img', ['src' => Thumbnail::getSrcPath($this->path, $value, $this->width, $this->height)]);
        }
        return $this;
    }
}
