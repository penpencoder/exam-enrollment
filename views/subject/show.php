<?php
    include_once ROOT_PATH . "views/layouts/header.php";
?>

<main class="container mt-5">
    <div class="card">
        <h5 class="card-header">Subject Info</h5>
        <div class="card-body">
            <h5 class="card-title"><?php echo $subjects->subject_name ?></h5>
            <p class="card-text"><?php echo $subjects->subject_desc ?></p>
            <p class="card-text"><?php echo $subjects->subject_teacher ?></p>
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</main>


<?php
    include_once ROOT_PATH . "views/layouts/footer.php";
?>