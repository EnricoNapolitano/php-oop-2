<?php
include_once __DIR__ . '/../models/AnimalCategory.php';
include_once __DIR__ . '/../models/Products.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Cage.php';

$bone_gum=new Products(10, 'Osso di gomma per cani', 'lorem ipsum bla bla bla', 'dog', 'https://m.media-amazon.com/images/I/61rRP0sjhRL.jpg');
$cat_cage=new Cage(25, 'Gabietta per gatti', 'gabietta per trasporto gatti piccola dimensione', 'cat', 50, 50, 40, 'https://i.ebayimg.com/images/g/ZPcAAOSwQupXVYiY/s-l640.jpg');
$tuna_food=new Food(6.5, 'Tonno squisito', 'tonno per gatti', 'cat', '31-12-2025', 'tonno', 'https://shop-cdn-m.mediazs.com/bilder/lattine/gratis/x/g/gourmet/gold/1/400/1394543_24plus12_nestle_gourmet_gold_raffiniertes_ragout_huhn_85g_hs_01_1_1.jpg' );
$dog_toy=new Products(15, 'Ecopoolservice', 'palla ovale per il tuo cane', 'dog', 'https://www.ecopoolservice.it/wp-content/uploads/2022/01/71p9V-dgV8L._AC_SL1500_.jpg');

$products = [$bone_gum, $cat_cage, $tuna_food, $dog_toy];

?>