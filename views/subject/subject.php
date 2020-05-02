<?php
    include_once ROOT_PATH . "views/layouts/header.php";
?>


<main class="mx-5 mt-5">
    <h1>Subjects</h1>

    <a href="index.php?sub=add"><button type="button" class="btn btn-primary"> Add Subject</button></a>

    <div class="table-responsive-xl">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Subject Id</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Subject Description</th>
                    <th scope="col">Teacher</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach($subjects as $sub_key => $sub_val){
                ?>


                <tr>
                    <th scope="row"><?php echo $sub_val["subject_id"]?></th>
                    <td><a href = "index.php?sub=show&subject_id=<?php echo $sub_val["subject_id"]; ?>"><?php echo $sub_val["subject_name"]?></a></td>
                    <td><?php echo $sub_val["subject_desc"]?></td>
                    <td><?php echo $sub_val["subject_teacher"]?></td>
                    <td>
                        <a href="index.php?sub=edit&subject_id=<?php echo $sub_val["subject_id"]; ?>"><button type="button" class="btn btn-warning">Update</button></a>
                        <a href="index.php?sub=delete&subject_id=<?php echo $sub_val["subject_id"]; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
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
