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
    /** @var string */
    private $path, $height, $width;
    /** @var array */
    private $flags;
    /** @var int */
    private $quality;


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
     * @param string|null $width
     * @param string|null $height
     * @param array       $flags
     * @param int|null    $quality
     * @return UploadImageControl
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
     * @return UploadImageControl
     * @throws \Exception
     */
    public function setValue($value): self
    {
        if ($this->path && $value && Thumbnail::isSrcPathExists($this->path . $value)) {
            $img = Html::el('img', ['src' => Thumbnail::getSrcPath($this->path, $value, $this->width, $this->height, $this->flags, $this->quality)]);
            $this->setOption('content', $img);
        }
        return $this;
    }
}
