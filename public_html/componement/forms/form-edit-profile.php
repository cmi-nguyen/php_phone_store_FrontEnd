<form method="post">
    <div class="mb-3">
        <label for="userName" class="form-label">User name</label>
        <input type="text" required class="form-control" name="userName" id="userName" aria-describedby="userName">

    </div>
    <div class="mb-3">
        <label for="fullName" class="form-label">Name</label>
        <input type="text" required class="form-control" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" required class="form-control" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" required class="form-control" name="password" id="password" aria-describedby="password">
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <input class="form-control" name="address" id="address"></input>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" required class="form-control" name="phone" id="phone" aria-describedby="phone">
    </div>
    <div class="d-flex justify-content-evenly">
        <button type="button" class="btn btn-secondary">Cancel</button>
        <button type="submit" name="button3" id="button3" class="btn btn-primary">Add</button>
    </div>
</form>