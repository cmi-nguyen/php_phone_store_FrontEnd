<div class="container">
    <h3>Cart</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            require_once("admin\includes\scripts\api\APIs.php");
            $url = "http://localhost:8080/product";
            $resp = getList($url);
            var_dump($_SESSION['cartItems']);
            /*
            foreach ($resp as $rs) {
                # code...
                foreach ($_SESSION['cartItems'] as $cartTtem) {
                    # code...
                    if($rs->productID==$cartTtem){
                        echo '<tr>';
                        echo ' <th scope="row">'.$rs->productName.'</th>';
                        echo ' <th scope="row">'.$rs->price.'</th>';
                        echo ' <th scope="row">'.'<input type="number"></input>'.'</th>';
                        echo '<form method="post">';
                        
                        echo ' <th scope="row">';
                        echo '<button type="submit" name="removeBtn" class="btn btn-danger">Remove</button>';
                        echo '<input type="hidden" name="itemID" value="'.$rs->productID.'"></input>';
                        echo '</th>';
                        echo '</form>';
                        echo '</tr>';
                    }
                }
                
            }*/
            ?>
        </tbody>
    </table>
    <p>Total</p>
</div>