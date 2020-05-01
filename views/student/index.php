<?php
    //require '../layouts/header.php';
?>

<main class="container mt-5">
    <h1>Enrolled Students</h1>

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
                $students = $this->student->getAllStudent();
                foreach($students as $stud_key => $stud_val){
            ?>


            <tr>
                <th scope="row"><?php echo $stud_val["id"]?></th>
                <td><?php echo $stud_val["name"]?></td>
                <td><?php echo $stud_val["email"]?></td>
                <td><?php echo $stud_val["number"]?></td>
                <td><?php echo $stud_val["address"]?></td>
                <td><?php echo $stud_val["subject"]?></td>
                <td>
                    <a href="sssdf"><button type="button" class="btn btn-warning">Warning</button></a>
                    <button type="button" class="btn btn-danger">Danger</button>
                </td>
            </tr>

            <?php
                }//foreach loop end
            ?>

        </tbody>
    </table>


</main>


<?php
    //require '../layouts/footer.php';
?>