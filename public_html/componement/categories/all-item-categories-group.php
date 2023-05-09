<div class="container">
    <h3>List of Product</h3>
    <div class="d-flex align-items-start flex-wrap">
        <?php
        require_once("admin\includes\scripts\api\APIs.php");
        $url = 'http://localhost:8080/product';
        $resp = getList($url);
        foreach ($resp as $rs) {
            # code...
            require("public_html\componement\cards\card-product.php");
        }
        ?>
    </div>
</div>

