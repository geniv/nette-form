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
    private $relativePath, $absolutePath;


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
     * @param string $relativePath
     * @param string $absolutePath
     * @return UploadFileControl
     */
    public function setPath(string $relativePath, string $absolutePath): self
    {
        $this->relativePath = $relativePath;
        $this->absolutePath = $absolutePath;
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
        if ($this->absolutePath && $this->relativePath && $value && file_exists($this->absolutePath . $value) && is_file($this->absolutePath . $value)) {
            $path = $this->relativePath . $value;
            $this->setOption('path', $path);
            $this->html->href = ($value ? $path : null);
            $this->html->setText($value);
            $this->setOption('content', $this->html);
        }
        return $this;
    }
}
