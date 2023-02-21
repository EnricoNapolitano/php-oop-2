<?php require_once __DIR__ . '/data/data.php' ?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/partials/head.html' ?>
<body>
    <header class="bg-success p-3 mb-5">
        <h1 class="text-center text-white">YPS - YourPetShop</h1>
    </header>
    
    <div class="container">
        <div class="row">

            <?php foreach($products as $product) : ?>
                <div class="col">

                <!-- ***CARD*** -->
                    <div class="card shadow-sm" style="width: 18rem; height: 40rem; cursor:pointer">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h2 class="h5"><?= $product->getName() ?></h2>
                            <figure class="mt-2" style="width: 35px">
                                <img class="img-fluid d-block rounded-circle" src="<?= $product->getCategory()->createIcon() ?>" alt="<?= $product->getCategory()->getPet() ?>">
                            </figure>
                        </div>

                        <div class="product-image">
                            <img src="<?= $product->getUrlImage() ?>" class="card-img-top mt-3 p-4" alt="<?= $product->getName() ?>" style="height: 18rem">
                            <p class="h5 text-bg-success p-3">Prezzo: <?= $product->getPrice() ?>€</p>
                        </div>
                        
                        <div class="card-body ">

                            <!-- product description -->
                            <h5>Descrizione</h2>
                            <p class="card-text"><?= $product->getDescription() ?></p>

                            <!-- dimension -->
                            <?php if($product instanceof Cage) : ?>
                                <h6>Dimensioni:</h6>
                                <p><?= $product->getWidth() ?>cm x <?= $product->getHeight() ?>cm x <?= $product->getDepth() ?>cm</p>
                            <?php endif; ?>

                            <!-- main ingredient -->
                            <?php if($product instanceof Food) : ?>
                                <h6>Ingrediente principale</h6>
                                <p><?= $product->getMainIngredient() ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</body>
</html>