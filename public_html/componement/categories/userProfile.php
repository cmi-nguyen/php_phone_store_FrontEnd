<div class="container">
    <h3>User profile: <?php echo $_SESSION['user']->userID?></h3>
    <p>
        <?php if ($_SESSION['user']->accessLevel) {
            echo "Admin";
        } else
            echo "Customer"; ?>
    </p>
    
        <p>Username:
            <?php echo $_SESSION['user']->userName ?>
        </p>
        <p>Name: <?php echo $_SESSION['user']->name?></p>

        <p>Email:
            <?php echo $_SESSION['user']->email ?>
        </p>

    <div>
        <a href="order?userid=<?php echo $_SESSION['user']->userID?>"><button type="button" class="btn btn-secondary">My orders</button></a>
        <a href="edit-profile?userid=<?php echo $_SESSION['user']->userID?>"><button type="button" class="btn btn-secondary">Edit profile</button></a>
    </div>


</div>