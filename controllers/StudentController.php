<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/personal-projects/exam-enrollment/models/Autoloader.php';
require_once ROOT_PATH . 'models/StudentModel.php';

class StudentController{

    private $stud_model;

    public function __construct(){
        $this->stud_model = new StudentModel;
    }

    //Redirect
    public function redirect($location)
	{
		header('Location: ' . $location);
	}

    //Handle Request
    public function handleRequest(){

        $op = isset($_GET['op']) ? $_GET['op'] : null;

		try 
		{
			if (!$op || $op == 'list')
			{
				$this->showAllStudentCont();
			}
				elseif ($op == 'show')
				{
					$this->showStudentCont();
				}
				elseif ($op == 'add')
				{
					$this->addStudentCont();
				}
				elseif ($op == 'edit')
				{
					$this->editStudentCont();
				}
				elseif ($op == 'delete')
				{
					$this->deleteStudentCont();
				}
				else 
				{
					$this->showError("Page not found", "Page for execution" . $op . " was not found");
				}
		}
		catch(Exception $e)
		{
			$this->showError("Application error", $e->getMessage());
		}
    }




    //Show all Student Data
    public function showAllStudentCont(){
        $students = $this->stud_model->getAllStudent();
        include ROOT_PATH . 'views/student/index.php';
    }

    //Show Single Student
    public function showStudentCont(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id)
		{
			throw new Exception('Internal error');
		}

        $students = $this->stud_model->getStudent($id);
        include ROOT_PATH . 'views/student/show.php';
    }

    //Add new Student
    public function addStudentCont(){

        if(isset($_POST["submit"])){

            $stud_data = array(
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "number" => $_POST["number"],
                "address" => $_POST["address"],
                "subject" => $_POST["subject"]
            );
            
            try
			{
				$this->stud_model->addStudent($stud_data);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
            
        }

        include ROOT_PATH . 'views/student/add.php';
    }


    //Edit Student
    public function editStudentCont(){

        $id = $_GET['id'];

        $stud_data = $this->stud_model->getStudent($id);

        if(isset($_POST["submit"])){

            $stud_data = array(
                "name" => $_POST["name"],
                "email" => $_POST["email"],
                "number" => $_POST["number"],
                "address" => $_POST["address"],
                "subject" => $_POST["subject"]
            );
            
            try
			{
				$this->stud_model->updateStudent($stud_data, $id);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
            
        }

        include ROOT_PATH . 'views/student/edit.php';
    }


    // Delete Student
    public function deleteStudentCont(){

        $id = isset($_GET['id']) ? $_GET['id'] : null;

        $result = $this->stud_model->deleteStudent($id);
        
        if($result){
            echo '<div class="alert alert-danger" role="alert">
            Successfully Deleted
          </div>';
        }else{
            echo '<div class="alert alert-warning" role="alert">
            Failed Delete
          </div>';
        }

        include ROOT_PATH . 'views/student/index.php';
        $this->redirect('index.php');

    }

}
?>