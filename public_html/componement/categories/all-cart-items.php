<div class="container">
    <h3>Cart</h3>
    <div class="table-responsive">


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
                $total = 0;


                # code...
                foreach ($_SESSION['cartItems'] as $cartTtem) {
                    # code...
                
                    echo '<tr>';
                    echo ' <th scope="row">' . $cartTtem->productName . '</th>';
                    echo ' <th scope="row">' . $cartTtem->price . '</th>';
                    echo ' <th scope="row">' . $cartTtem->quantity . '</th>';
                    $total += $cartTtem->price * $cartTtem->quantity;
                    echo '<form method="post">';

                    echo ' <th scope="row" style="width: 30%">';

                    echo '<input type="hidden" name="itemID" value="' . $cartTtem->productID . '"></input>';
                    echo '<button type="submit" name="increaseBtn" class="btn btn-secondary">Increase</button>';
                    echo '<button type="submit" name="decreaseBtn" class="btn btn-secondary">Decrease</button>';
                    echo '<button type="submit" name="removeBtn" class="btn btn-danger">Remove</button>';
                    echo '</th>';
                    echo '</form>';
                    echo '</tr>';

                }


                ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-evenly">
            <form method="post">
                <button type="submit" name="checkoutBtn" class="btn btn-primary">Checkout</button>
            </form>
            <p>Total: </p>
            <p>
                <?php echo $total . ' $' ?>
            </p>
        </div>


    </div>