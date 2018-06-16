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
    /** @var string */
    private $path;


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
        if ($this->path && $value) {
            $href = Html::el('a', ['href' => ($value ? $this->path . $value : null)]);
            $href->setText($value);
            $div = Html::el('div');
            $div->addHtml($href);
            $this->setOption('description', $div);
        }
        return $this;
    }
}
