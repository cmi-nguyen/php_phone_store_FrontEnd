<table class="table caption-top">
    <caption>List of Brands</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Brand ID</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("./includes/scripts/api/APIs.php");
        $url= 'http://localhost:8090/brand';
        $resp = getList($url);

        foreach ($resp as $rs) {
            echo '<tr>';
            echo '<th scope="row">' . $rs->brandID . '</th>';
            echo '<td>' . $rs->brandName . '</td>';
            echo '<td>' . $rs->description . '</td>';
            echo '<td>';
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . strval($rs->brandID) . '">';
            require("./includes/componement/buttons/table-button-group.php");
            echo '</form>';
            echo '</td>';
            echo '</tr>';

        }
        ?>
    </tbody>

</table>