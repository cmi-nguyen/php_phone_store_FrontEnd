<div class="container">
    <h3>Search product</h3>
    <div class="container">
        <form method="get" action="search-product">
            <div class="row">
                <div class="col">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Search Product"
                            aria-label="Search Product" aria-describedby="button-addon1">
                        <button class="btn btn-outline-secondary" name="button1" type="submit"
                            id="button1">Search</button>
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-primary" name="button2" type="button" id="button2" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop2">Add Product</button>
                </div>
            </div>
        </form>
        <?php
        require_once("./includes/scripts/handlers/product-management-form-handler.php");
        require_once("./includes/componement/tables/table-search-product.php");
        require_once("./includes/componement/forms/form-add-product.php");
        ?>
    </div>
</div>

</div>