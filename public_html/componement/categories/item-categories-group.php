<div class="container">
    <div class="col">
        <?php
        require_once("admin\includes\scripts\api\APIs.php");
        $url = 'http://localhost:8090/product';
        $url1 = 'http://localhost:8090/brand';
        $resp = getList($url);
        $respBrand = getList($url1);
        foreach ($respBrand as $respBr) {
            echo '<div class="row">';
            echo '<div class="d-flex justify-content-center">';
            echo '<h4>' .$respBr->brandName.'</h4>';
            echo '</div>';  
            foreach ($resp as $rs) {
                if($rs->brandID==$respBr->brandID){
                    require("public_html\componement\cards\card-product.php");
                }
            }
            echo '</div>';
        }
        ?>
    </div>
</div>

