<?php 

require("./includes/scripts/api/APIs.php");
$url = 'http://localhost:8080/product/' . '' . $_GET['id'];
$resp = getSingleItem($url);

?>
<form method="post">
    <div class="mb-3">
        <label for="productName" class="form-label">Product name</label>
        <input type="text" required class="form-control" name="productName" id="productName"
            aria-describedby="productName" value="<?php echo $resp->productName ?>">
    </div>
    <div class="mb-3">
        <input type="hidden" required class="form-control" name="productID" id="productID"
            aria-describedby="productName" value="<?php echo $resp->productID ?>">
    </div>
    <div class="mb-3">
        <label for="img-url" class="form-label">Img URL</label>
        <input type="text" required class="form-control" name="imgURL" id="imgURL" aria-describedby="imgURL"
            value="<?php echo $resp->imgURL ?>">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Product's description</label>
        <textarea class="form-control" name="description" id="description" rows="3"
            ><?php echo $resp->description ?></textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" required class="form-control" name="price" id="price" value="<?php echo $resp->price ?>">
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" required class="form-control" name="stock" id="stock" value="<?php echo $resp->stock ?>">
    </div>


    <div class="mb-3">
        <?php require("form-brand-sellect.php") ?>
    </div>
    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="button3" id="button3" class="btn btn-primary">Save</button>
    </div>
</form>
