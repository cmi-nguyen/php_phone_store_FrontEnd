<?php
// Define variables and set to empty values
$userName = $fullName = $email = $password = $address = $phone = "";
$userNameErr = $fullNameErr = $emailErr = $passwordErr = $phoneErr = "";

// Function to sanitize user input
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate form data on form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate User name
    if (empty($_POST["userName"])) {
        $userNameErr = "User name is required";
    } else {
        $userName = sanitizeInput($_POST["userName"]);
        // Check if User name contains only letters and numbers
        if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
            $userNameErr = "Only letters and numbers allowed for User name";
        }
    }

    // Validate Full Name
    if (empty($_POST["name"])) {
        $fullNameErr = "Full Name is required";
    } else {
        $fullName = sanitizeInput($_POST["name"]);
        // Check if Full Name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $fullName)) {
            $fullNameErr = "Only letters and white space allowed for Full Name";
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitizeInput($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = sanitizeInput($_POST["password"]);
        // You can add additional password validation rules if needed
    }

    // Validate Address (optional field)

    $address = sanitizeInput($_POST["address"]);

    // Validate Phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = sanitizeInput($_POST["phone"]);
        // Check if Phone contains only numbers and has a length of 10
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Phone must be a 10-digit number";
        }
    }

    // If there are no errors, you can process the form data
    if (empty($userNameErr) && empty($fullNameErr) && empty($emailErr) && empty($passwordErr) && empty($phoneErr)) {
        // Process the form data, save to database, send email, etc.
        // ...
        // You can redirect to a success page if needed
        header("Location: success.php");
        exit();
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add user form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="mb-3">
                        <label for="userName" class="form-label">User name</label>
                        <input type="text" required class="form-control" name="userName" id="userName"
                            aria-describedby="userName">

                    </div>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" required class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" required class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" required class="form-control"name="password" id="password" aria-describedby="password">
                    </div>
                    <div class="mb-3">
                        <label for="Address" class="form-label">Address</label>
                        <input class="form-control" name="address" id="address"></input>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" required class="form-control"name="phone" id="phone" aria-describedby="phone">
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="button3" id="button3" class="btn btn-primary">Add</button>
                    </div>
                </form>
      </div>

    </div>
  </div>
</div>