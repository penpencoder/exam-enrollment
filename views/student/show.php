<?php
    include_once ROOT_PATH . "views/layouts/header.php";
?>

<main class="container mt-5">
    <div class="card">
        <h5 class="card-header">Student Info</h5>
        <div class="card-body">
            <h5 class="card-title"><?php echo $students->name ?></h5>
            <p class="card-text"><?php echo $students->email ?></p>
            <p class="card-text"><?php echo $students->number ?></p>
            <p class="card-text"><?php echo $students->address ?></p>
            <hr>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Subject Description</th>
                    <th scope="col">Teacher</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>IT 001</td>
                        <td>Intro in Programming</td>
                        <td>Mr. Pawer Ful</td>
                    </tr>
                </tbody>
            </table>
            <p class="card-text"><?php echo $students->subject?></p>
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</main>


<?php
    include_once ROOT_PATH . "views/layouts/footer.php";
?>