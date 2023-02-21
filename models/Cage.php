<?php
require_once __DIR__ . '/Product.php';

class Cage extends Product
{
    private $width;
    private $height;
    private $depth;

    public function __construct($price, $name, $description, $category, $width, $height, $depth, $url_image = 'https://svg.template.creately.com/MIQyt1kde0t')
    {
        parent::__construct($price, $name, $description, $category, $url_image);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setDepth($depth);
    }

    public function setWidth($width)
    {
        $this->width=$width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setHeight($height)
    {
        $this->height=$height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setDepth($depth)
    {
        $this->depth=$depth;
    }

    public function getDepth()
    {
        return $this->depth;
    }
}
?>