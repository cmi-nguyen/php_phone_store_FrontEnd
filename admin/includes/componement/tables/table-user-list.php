<table class="table caption-top">
    <caption>List of users</caption>
    <thead class="table-dark">
        <tr>
            <th scope="col">User ID</th>
            <th scope="col">Username</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Access Level</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once("./includes/scripts/api/APIs.php");
        $url= 'http://localhost:8090/user';
        $resp = getList($url);

        foreach ($resp as $rs) {
            echo '<tr>';
            echo '<th scope="row">' . $rs->userID . '</th>';
            echo '<td>' . $rs->userName . '</td>';
            echo '<td>' . $rs->name . '</td>';
            echo '<td>' . $rs->email . '</td>';
            echo '<td>' . $rs->address . '</td>';
            echo '<td>' . $rs->phone . '</td>';
            if ($rs->accessLevel == true) {
                echo '<td>' . 'Employee' . '</td>';
            } else
                echo '<td>' . 'Customer' . '</td>';
            echo '<td>';
            echo '<div class="d-flex">';
            echo '<form method="get">';
            echo '<input type="hidden" name="id" value="' . strval($rs->userID) . '">';
            echo '<button type="submit" name="view" class="btn btn-outline-primary btn-sm">View</button>
            <button type="submit" name="edit"  class="btn btn-outline-info btn-sm">Edit</button>';

            //require("./includes/componement/buttons/table-button-group.php");
            echo '</form>';
            echo '<form method="post">';
            echo '<input type="hidden" name="id" value="' . strval($rs->userID) . '">';
            echo '<button type="submit" name="delete" class="btn btn-outline-danger btn-sm">Delete</button>';
            echo  '</form>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';

        }
        ?>
    </tbody>

</table>