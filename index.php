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
                    <div class="card p-4" style="width: 18rem">
                        <img src="<?= $product->url_image ?>" class="card-img-top" alt="<?= $product->name ?>" style="height: 18rem">
                        <div class="card-body text-center">
                            <h2 class="h4"><?= $product->name ?></h2>
                            <h6>Categoria: <?= $product->animal_category ?></h6>
                            <p class="card-text"><?= $product->description ?></p>

                            <?php if($product instanceof Cage) : ?>
                                <h6>Dimensioni:</h6>
                                <p><?= $product->width ?>cm x <?= $product->height ?>cm x <?= $product->depth ?>cm</p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>