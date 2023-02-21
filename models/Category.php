<?php
class Category
{
    private $pet;

    public function __construct($pet)
    {
        $this->setPet($pet);
    }

    public function setPet($pet)
    {
        $this->pet=$pet;
    }

    public function getPet()
    {
        return $this->pet;
    }

    public function createIcon(){
        $cat_icon = 'https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2022/07/GattinoPrimiMesi.jpg';
        $dog_icon = 'https://images.squarespace-cdn.com/content/v1/58b4791ad2b857c893179e34/1537971642021-LHW76T7O8JG0M4GLTSTP/IMG_2818.jpg?format=500w';
        
        return $this->pet === 'cat' ? $cat_icon : $dog_icon;
    }
}
?>