<?php
    include_once ROOT_PATH . "views/layouts/header.php";
    //var_dump($sub_data);

?>



<main class="container mt-5">
    <div class="card  mx-auto p-4 col-md-7">
        <h3 class="card-title">Edit Subject</h3>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label>Subject Name</label>
                    <input type="text" name="subject_name" class="form-control" value="<?php echo $sub_data->subject_name?>">
                </div>
                <div class="form-group">
                    <label>Subject Description</label>
                    <input type="text" name="subject_desc" class="form-control" value="<?php echo $sub_data->subject_desc?>">
                </div>
                <div class="form-group">
                    <label>Subject Teacher</label>
                    <input type="text" name="subject_teacher" class="form-control" value="<?php echo $sub_data->subject_teacher?>">
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