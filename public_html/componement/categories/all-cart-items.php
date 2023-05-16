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
            var_dump($_SESSION['cartItems']);
            
            
                # code...
                foreach ($_SESSION['cartItems'] as $cartTtem) {
                    # code...
                    
                        echo '<tr>';
                        echo ' <th scope="row">'.$cartTtem->productName.'</th>';
                        echo ' <th scope="row">'.$cartTtem->price.'</th>';
                        echo ' <th scope="row">'.$cartTtem->quantity.'</th>';
                        echo '<form method="post">';
                        
                        echo ' <th scope="row">';
                        echo '<button type="submit" name="removeBtn" class="btn btn-danger">Remove</button>';
                        echo '<input type="hidden" name="itemID" value="'.$cartTtem->productID.'"></input>';
                        echo '</th>';
                        echo '</form>';
                        echo '</tr>';
                    
                }
                
            
            ?>
        </tbody>
    </table>
    <p>Total</p>
</div>