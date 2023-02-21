<?php
require_once __DIR__ . '/Category.php';

class Product
{
    protected $name;
    protected $price;
    protected $url_image;
    protected $description;
    protected $category;

    public function __construct($price, $name, $description, Category $category, $url_image = 'https://svg.template.creately.com/MIQyt1kde0t' )
    {
        $this->setPrice($price);
        $this->setName($name);
        $this->setDescription($description);
        $this->setCategory($category);
        $this->setUrlImage($url_image);
    }

    // SETTERS AND GETTERS for construct's variables
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setCategory($category)
    {
        if(!$category instanceof Category) return false;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setUrlImage($url_image)
    {
        $this->url_image = $url_image;
        return $this;
    }

    public function getUrlImage()
    {
        return $this->url_image;
    }
}
?>