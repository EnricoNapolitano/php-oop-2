<?php
/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- Tra i prodotti, troviamo cibo, giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo,
icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc). */

require_once __DIR__ . '/AnimalCategory.php';

class Products
{
    public $name;
    public $price;
    public $url_image;
    public $description;
    public $animal_category;

    public function __construct($_price, $_name, $_description, $_animal_category, $_url_image = 'https://svg.template.creately.com/MIQyt1kde0t' )
    {
        $this->price=$_price;
        $this->name=$_name;
        $this->description=$_description;
        $this->animal_category=$_animal_category;
        $this->url_image=$_url_image;
    }

    private function setIcon($category)
    {
        $cat_icon = 'https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2022/07/GattinoPrimiMesi.jpg';
        $dog_icon = 'https://images.squarespace-cdn.com/content/v1/58b4791ad2b857c893179e34/1537971642021-LHW76T7O8JG0M4GLTSTP/IMG_2818.jpg?format=500w';
        return $category === 'cat' ? $cat_icon : $dog_icon ;
    }
    
    public function getIcon()
    {
        return $this->setIcon($this->animal_category);
    }
}
?>