<?php
    include_once ROOT_PATH . "views/layouts/header.php";
?>

<main class="mx-5 mt-5">
    <h1>Enrolled Students</h1>

    <a href="index.php?op=add"><button type="button" class="btn btn-primary"> Add Student</button></a>

    <div class="table-responsive-xl">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    //$students = $this->stud_model->getAllStudent();
                    foreach($students as $stud_key => $stud_val){
                ?>


                <tr>
                    <th scope="row"><?php echo $stud_val["id"]?></th>
                    <td><a href = "index.php?op=show&id=<?php echo $stud_val["id"]; ?>"><?php echo $stud_val["name"]?></a></td>
                    <td><?php echo $stud_val["email"]?></td>
                    <td><?php echo $stud_val["number"]?></td>
                    <td><?php echo $stud_val["address"]?></td>
                    <td><?php echo $stud_val["subject"]?></td>
                    <td>
                        <a href="index.php?op=edit&id=<?php echo $stud_val["id"]; ?>"><button type="button" class="btn btn-warning">Update</button></a>
                        <a href="index.php?op=delete&id=<?php echo $stud_val["id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>

                <?php
                    }//foreach loop end
                ?>

            </tbody>
        </table>
    </div>

</main>


<?php
    include_once ROOT_PATH . "views/layouts/footer.php";
?>