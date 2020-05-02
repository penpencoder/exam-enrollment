<?php
    include_once ROOT_PATH . "views/layouts/header.php";
?>


<main class="container mt-5">
    <div class="card mx-auto p-4 col-md-7">
        <h3 class="card-title">Add New Student</h3>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Number</label>
                    <input type="number" name="number" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <a href="index.php"><button class="btn btn-outline-dark">Back</button></a>
            </form>
        </div>
    </div>
</main>

<?php
    include_once ROOT_PATH . "views/layouts/footer.php";
?>