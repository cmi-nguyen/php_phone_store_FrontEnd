<table class="table caption-top">
    <caption>List of Products</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">
                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                    href="?sort=productID">Product ID</a>
            </th>
            <th scope="col">

                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                    href="?sort=productName">Product Name</a>
            </th>
            <th scope="col">
                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                    href="?sort=price">Price</a>
            </th>
            <th scope="col">Brand Name
            </th>
            <th scope="col">
                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                    href="?sort=stock">Stock</a>
            </th>
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
        // pagination and search
        $numberOfItemPerPage = 5;
        $numberOfPage = ceil(sizeof($resp) / $numberOfItemPerPage);

        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        } else {
            $_GET['page'] = 1;
            $currentPage = $_GET['page'];
        }
        $i = 0;
        $j = 1;
        if (isset($_GET['sort'])) {
            $sorted = array_column($resp, $_GET['sort']);
            array_multisort($sorted, SORT_ASC, $resp); 
             
        }

        foreach ($resp as $rs) {
            if ($i++ < $numberOfItemPerPage * ($currentPage - 1))
                continue;
            if ($j++ > $numberOfItemPerPage * $currentPage)
                break;
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
            echo '<input type="hidden" name="id" value="' . strval($rs->productID) . '">';
            echo '<button type="submit" class="btn btn-outline-primary btn-sm">View</button>';
            echo '</form>';
            echo '<form action="edit-product" method="get">';
            echo '<input type="hidden" name="id" value="' . strval($rs->productID) . '">';
            echo '<button type="submit" class="btn btn-outline-info btn-sm">Edit</button>';
            echo '</form>';
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . strval($rs->productID) . '">';
            echo '<button type="submit" name="delete" class="btn btn-outline-danger btn-sm">Delete</button>';
            echo '</form>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';

        }
        ?>
    </tbody>

</table>

