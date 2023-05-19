<table class="table caption-top">
    <caption>List of Orders</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Bill ID</th>    
            <th scope="col">User Name</th>
            <th scope="col">User ID</th>
            <th scope="col">Total</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("./includes/scripts/api/APIs.php");
        $url = 'http://localhost:8080/bill';

        $resp = getList($url);


        foreach ($resp as $rs) {
            echo '<tr>';
            echo '<th scope="row">' . $rs->billID . '</th>';
            echo '<td>';
          
            $url2 = 'http://localhost:8080/user/' . '' . $rs->userID;
            $resp2 = getSingleItem($url2);
            echo $resp2->userName;
            echo '</td>';
            echo '<td>' . $rs->userID . '</td>';
            echo '<td>' . $rs->total . '</td>';
            echo '<td>' . $rs->date . '</td>';
            if ($rs->status) {
                echo '<td>' . 'Completed' . '</td>';
            } else
                echo '<td>' . 'Processing' . '</td>';

            echo '<td>';
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . strval($rs->billID) . '">';
            echo '<a href="detail-bill?id='.$rs->billID.'">';
            echo '<button type="button" name="view" class="btn btn-outline-primary btn-sm">View</button>';
            echo '</a>';
            if ($rs->status){
               // echo '<button type="submit" name="aproveBtn" class="btn btn-disabled  btn-outline-danger btn-sm">Approve</button>';
            } else {
                echo '<button type="submit" name="aproveBtn" class="btn btn-outline-danger btn-sm">Approve</button>';
            }
            
            echo '</form>';
            echo '</td>';
            echo '</tr>';

        }
        ?>
    </tbody>

</table>
