<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $expiring_date;
    public $main_ingredient;

    public function __construct($_price, $_name, $_description, $_animal_category, $_expiring_date, $_main_ingredient, $_url_image = 'https://svg.template.creately.com/MIQyt1kde0t')
    {
        parent::__construct($_price, $_name, $_description, $_animal_category, $_url_image);
        $this->expiring_date=$_expiring_date;
        $this->main_ingredient=$_main_ingredient;
    }
}
?>