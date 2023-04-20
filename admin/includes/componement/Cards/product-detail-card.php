<div class="card mb-3" style="max-width: 1000px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $resp->imgURL ?>" class="img-fluid rounded-start" alt="Product Image">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $resp->productName ?>
                </h5>
                <p class="card-text">
                    <?php echo 'Product ID: ' . $resp->productID ?>
                </p>
                <p class="card-text">
                    <?php echo 'Brand ID: ' . $resp->brandID ?>
                </p>
                <p class="card-text">
                    <?php echo 'Description: ' . $resp->description ?>
                </p>
                <p class="card-text"><small class="text-body-secondary">
                        <?php echo 'Price: ' . $resp->price . '$'; ?>
                    </small></p>
                <p class="card-text"><small class="text-body-secondary">
                        <?php echo 'In Stock: ' . $resp->stock ?>
                    </small></p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary">Back </button>
                    <button type="button" class="btn btn-secondary">Edit </button>
                    <button type="button" class="btn btn-danger">Delete </button>
                </div>

            </div>
        </div>
    </div>
</div>