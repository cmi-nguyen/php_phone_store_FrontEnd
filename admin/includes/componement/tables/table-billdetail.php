<table class="table caption-top">
    <caption>Bill Detail - ID :  <?php echo $_GET['id']?></caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Product ID</th>    
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("./includes/scripts/api/APIs.php");
        $url = 'http://localhost:8090/billdetail';
        $total = 0;
        $resp = getList($url);
        foreach ($resp as $rs) {
            if($rs->billID==$_GET['id']){
                echo '<tr>';
                echo '<th scope="row">' . $rs->productID . '</th>';
                $url2= 'http://localhost:8080/product/'.$rs->productID;
                $product= getSingleItem($url2);
                echo '<td>'.$product->productName.'</td>';
                echo '<td>'.$rs->quantity.'</td>';
                echo '<td>'.$product->price.' $</td>';
                echo '</tr>';  
                $total+=$product->price*$rs->quantity;
            }
        }

        $url3='http://localhost:8080/bill/'.$_GET['id'];
        $bill= getSingleItem($url3);
        ?>
    </tbody>
    

</table>
<div class="d-flex justify-content-evenly">
<p>Date: <?php echo $bill->date?> </p>
        <p>Total: <?php echo $total.' $'?></p>
        
    </div>