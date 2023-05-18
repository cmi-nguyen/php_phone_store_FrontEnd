<div class="container">
    <h3><?php 'Brand '.$_GET['id']?></h3>
    <div class="d-flex align-items-start flex-wrap">
        <?php
        require_once("admin\includes\scripts\api\APIs.php");
        $url = 'http://localhost:8080/product';
        $resp = getList($url);
        $i=0;
        foreach ($resp as $rs) {
            # code...
            if($rs->brandID==$_GET['id']){
                require("public_html\componement\cards\card-product.php");
                $i+=1;
            }
        }
        if($i==0){
            echo "There is no item in this category";
        }
        ?>
    </div>
</div>

