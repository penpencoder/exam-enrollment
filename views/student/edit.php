<?php
    include_once ROOT_PATH . "views/layouts/header.php";
    //var_dump($stud_data);

?>



<main class="container mt-5">
    <div class="card  mx-auto p-4 col-md-7">
        <h3 class="card-title">Edit Student</h3>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $stud_data->name?>">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $stud_data->email?>">
                </div>
                <div class="form-group">
                    <label>Number</label>
                    <input type="number" name="number" class="form-control" value="<?php echo $stud_data->number?>">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address" rows="3"><?php echo $stud_data->address?></textarea>
                </div>
                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" value="<?php echo $stud_data->subject?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                <a href="index.php"><button class="btn btn-outline-dark">Back</button></a>
            </form>
        </div>
    </div>
</main>

<?php
    include_once ROOT_PATH . "views/layouts/footer.php";
?>