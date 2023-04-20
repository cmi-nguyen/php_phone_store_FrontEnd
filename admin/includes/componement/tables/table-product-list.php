<table class="table caption-top">
    <caption>List of Products</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Stock</th>
            
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("./includes/scripts/api/APIs.php");
        $url1 = 'http://localhost:8080/product';
        $url2 = 'http://localhost:8080/brand';

        $resp = getList($url1);
        $brands = getList($url2);

        foreach ($resp as $rs) {
            echo '<tr>';
            echo '<th scope="row">' . $rs->productID . '</th>';
            echo '<td>' . $rs->productName . '</td>';
            echo '<td>' . $rs->price . '</td>';
            foreach ($brands as $br) {
                if ($rs->brandID == $br->brandID) {
                    echo '<td>' . $br->brandName . '</td>';
                }
            }
            echo '<td>' . $rs->stock . '</td>';
            



            echo '<td>';
            echo '<div class="d-flex">';
            echo '<form action="detail-product" method="get">';
            echo '<input type="hidden" name="rowID" value="' . strval($rs->productID) . '">';
            echo '<button type="submit" class="btn btn-outline-primary btn-sm">View</button>
            <button type="submit" class="btn btn-outline-info btn-sm">Edit</button>';
            echo '</form>';
            echo '<form method="post">';
            echo '<input type="hidden" name="rowID" value="' . strval($rs->productID) . '">';
            echo '<button type="submit" name="delete" class="btn btn-outline-danger btn-sm">Delete</button>';
            echo '</form>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>

</table>