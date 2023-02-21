<?php
include_once __DIR__ . '/../models/AnimalCategory.php';
include_once __DIR__ . '/../models/Product.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Cage.php';

$bone_gum=new Product(10, 'Osso giocattolo', 'Osso di gomma per il tuo cane', 'dog', 'https://m.media-amazon.com/images/I/61rRP0sjhRL.jpg');
$cat_cage=new Cage(25, 'Gabbietta per gatti', 'Gabietta per trasporto gatti piccola dimensione', 'cat', 50, 50, 40, 'https://i.ebayimg.com/images/g/ZPcAAOSwQupXVYiY/s-l640.jpg');
$tuna_food=new Food(6.5, 'Tonno squisito', 'Tonno per gatti', 'cat', '31-12-2025', 'tonno', 'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw31e1937a/idt/143329.jpg?sw=800&sh=800' );
$dog_toy=new Product(15, 'Rugby Ball', 'Palla ovale per il tuo cane', 'dog', 'https://www.ecopoolservice.it/wp-content/uploads/2022/01/71p9V-dgV8L._AC_SL1500_.jpg');

$products = [$bone_gum, $cat_cage, $tuna_food, $dog_toy];

?>