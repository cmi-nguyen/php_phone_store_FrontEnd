<table class="table caption-top">
    <caption>List of Orders</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">Bill ID</th>    
            
            <th scope="col">Total</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("admin\includes\scripts\api\APIs.php");
        $url = 'http://localhost:8080/bill';
        $resp = getList($url);
        foreach ($resp as $rs) {
            if($rs->userID==$_GET['userid']){
                echo '<tr>';
                echo '<th scope="row">' . $rs->billID . '</th>';
                
                echo '<td>' . $rs->date . '</td>';
                echo '<td>' . $rs->total . '</td>';
                if ($rs->status) {
                    echo '<td>' . 'Completed' . '</td>';
                } else
                    echo '<td>' . 'Processing' . '</td>';
                echo '<td>';
                echo '<form method="post">';
                echo '<input type="hidden" name="id" value="' . strval($rs->billID) . '">';
                echo '<a href="detail-order?id='.$rs->billID.'">';
                echo '<button type="button" name="view" class="btn btn-outline-primary btn-sm">View</button>';
                echo '</a>';      
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            

        }
        ?>
    </tbody>

</table>
<?php if(sizeof($resp)==0){
    echo "There is no orders yet";
}
