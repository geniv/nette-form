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
    /** @var array */
    private $flags;
    /** @var int */
    private $quality;


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
     * @param string|null $width
     * @param string|null $height
     * @param array       $flags
     * @param int|null    $quality
     * @return ImageControl
     */
    public function setImageSize(string $width = null, string $height = null, array $flags = [], int $quality = null): self
    {
        $this->width = $width;
        $this->height = $height;
        $this->flags = $flags;
        $this->quality = $quality;
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
        if ($this->path && $value && file_exists($this->path . $value) && is_file($this->path . $value)) {
            $this->control = Html::el('img', ['src' => Thumbnail::getSrcPath($this->path, $value, $this->width, $this->height, $this->flags, $this->quality)]);
        }
        return $this;
    }
}
