<?php require_once __DIR__ . '/data/data.php' ?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/partials/head.html' ?>
<body>
    <header class="bg-primary p-3 mb-5">
        <h1 class="text-center text-white">YPS - YourPetShop</h1>
    </header>
    
    <div class="container">
        <div class="row">

            <?php foreach($products as $product) : ?>
                <div class="col">
                    <div class="card" style="width: 18rem">
                        <div class="card-header d-flex align-item-center justify-content-between">
                            <h2 class="h5 pt-1"><?= $product->name ?></h2>
                            <figure style="width: 30px">
                                <img class="img-fluid d-block rounded-circle" src="<?= $product->getIcon() ?>" alt="<?= $product->animal_category->animal ?>">
                            </figure>
                        </div>

                        <img src="<?= $product->url_image ?>" class="card-img-top mt-3 p-4" alt="<?= $product->name ?>" style="height: 18rem">
                        
                        <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">

                            <h5>Descrizione prodotto</h2>
                            <p class="card-text"><?= $product->description ?></p>

                            <?php if($product instanceof Cage) : ?>
                                <h6>Dimensioni:</h6>
                                <p><?= $product->width ?>cm x <?= $product->height ?>cm x <?= $product->depth ?>cm</p>
                            <?php endif; ?>

                            <?php if($product instanceof Food) : ?>
                                <h6>Ingrediente principale</h6>
                                <p><?= $product->main_ingredient ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>
</html>