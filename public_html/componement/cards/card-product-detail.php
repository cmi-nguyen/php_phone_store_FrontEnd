<?php require_once("admin\includes\scripts\api\APIs.php");
$url = 'http://localhost:8090/product/' . $_GET['id'];
$resp = getSingleItem($url); ?>
<div class="container">
    <div class="card mb-3" style="max-width: 1200px;">
        <div class="row g-0">
            <div class="col">
                <img src="<?php echo $resp->imgURL ?>" class="img-fluid rounded-start" alt="Product Image">
            </div>
            <div class="col">
                <div class="card-body">
                    <h3 class="card-title text-danger-emphasis">
                        <?php echo $resp->productName ?>
                    </h3>
                    <p class="card-text">
                        <?php echo 'Brand ID: ' . $resp->brandID ?>
                    </p>
                    <p class="card-text">
                        <?php echo 'Description: ' . $resp->description ?>
                    </p>
                    <h4 class="card-text text-info-emphasis">
                        <?php echo 'Price: ' . $resp->price . '$'; ?>
                    </h4>
                    <h4 class="card-text">
                        <?php echo 'In Stock: ' . $resp->stock ?>
                    </h4>
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $resp->productID ?>">
                        <button class="btn btn-primary" name="addToCartBtn">Add to cart</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>