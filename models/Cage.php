<?php
require_once __DIR__ . '/AnimalCategory.php';
require_once __DIR__ . '/Products.php';

class Cage extends Products
{
    public $width;
    public $height;
    public $depth;

    public function __construct($_price, $_name, $_description, $_animal_category, $_width, $_height, $_depth, $_url_image = 'https://svg.template.creately.com/MIQyt1kde0t')
    {
        parent::__construct($_price, $_name, $_description, $_animal_category, $_url_image);
        $this->width=$_width;
        $this->height=$_height;
        $this->depth=$_depth;
    }
}
?>