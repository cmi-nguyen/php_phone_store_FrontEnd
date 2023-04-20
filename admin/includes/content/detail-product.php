<div class="col">
    <h3>Product Detail</h3>
    <?php
    require_once("./includes/scripts/api/APIs.php");
    $url = 'http://localhost:8080/product/' . '' . $_GET['rowID'];
    $resp = getSingleItem($url);

    require_once("./includes/componement/Cards/product-detail-card.php");

    ?>

</div>

</div>