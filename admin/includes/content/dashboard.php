<?php
require_once("./includes/scripts/api/APIs.php");
$url = 'http://localhost:8090/bill';
$resp = getList($url);


// calculate best sell
$todaySale = 0;
$monthlySale = 0;
$yearlySale = 0;
foreach ($resp as $rs) {
    if (str_contains($rs->date, date("d"))) {
        $todaySale += $rs->total;
    }
    if (str_contains($rs->date, date("m"))) {
        $monthlySale += $rs->total;
    }
    if (str_contains($rs->date, date("y"))) {
        $yearlySale += $rs->total;
    }
// get the best selling item
$url2 = 'http://localhost:8090/product';
$resp2 = getList($url2);
$listProduct = array();
$i=0;
foreach ($resp2 as $rs2) {
    $product = new product();
    $product->productID = $rs2->productID;
    $product->productName = $rs2->productName;
    $product->price = $rs2->price;
    $product->qtySold=0;
    $listProduct[$i] = $product;
    $i++;
}
// get qty sold
$url3 = 'http://localhost:8090/billdetail';
$resp3 = getList($url3);


} ?>
<div class="container">
    <h3>Dashboard</h3>
    <div class="d-flex justify-content-evenly">
        <div class="d-flex">
            <h5>Today sale: </h5>
            <p>
                <?php echo $todaySale .' $'?>
            </p>
        </div>
        <div class="d-flex">
            <h5>This month sale: </h5>
            <p>
                <?php echo $monthlySale.' $' ?>
            </p>
        </div>
        <div class="d-flex">
            <h5>This year sale: </h5>
            <p>
                <?php echo $yearlySale.' $' ?>
            </p>
        </div>
    </div>

</div>