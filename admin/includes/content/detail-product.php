<div class="container">
    <h3>Product Detail</h3>
    <?php
    require_once("./includes/scripts/api/APIs.php");
    $url = 'http://localhost:8090/product/' . '' . $_GET['id'];
    $resp = getSingleItem($url);

    require_once("./includes/componement/Cards/product-detail-card.php");

    ?>

</div>