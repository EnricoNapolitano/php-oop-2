<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $expiring_date;
    private $main_ingredient;

    public function __construct($price, $name, $description, $animal_category, $expiring_date, $main_ingredient, $url_image = 'https://svg.template.creately.com/MIQyt1kde0t')
    {
        parent::__construct($price, $name, $description, $animal_category, $url_image);
        $this->setExpiringDate($expiring_date);
        $this->setMainIngredient($main_ingredient);
    }

    public function setExpiringDate($date)
    {
        $this->date = $date;
    }

    public function getExpiringDate()
    {
        return $this->expiring_date;
    }

    public function setMainIngredient($ingredient)
    {
        $this->main_ingredient = $ingredient;
    }

    public function getMainIngredient()
    {
        return $this->main_ingredient;
    }
}
?>