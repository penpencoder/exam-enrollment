<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/personal-projects/exam-enrollment/models/Autoloader.php';
require_once ROOT_PATH . 'models/SubjectModel.php';

class SubjectController{

    private $sub_model;

    public function __construct(){
        
        $this->sub_model = new SubjectModel;

    }

    //Redirect
    public function redirect($location)
	{
		header('Location: ' . $location);
    }
    
    //Handle Request
    public function handleRequest(){

        $sub = isset($_GET['sub']) ? $_GET['sub'] : null;

		try 
		{
			if (!$sub || $sub == 'list')
			{
				$this->showAllSubjectCont();
			}
				elseif ($sub == 'show')
				{
					$this->showSubjectCont();
				}
				elseif ($sub == 'add')
				{
					$this->addSubjectCont();
				}
				elseif ($sub == 'edit')
				{
					$this->editSubjectCont();
				}
				elseif ($sub == 'delete')
				{
					$this->deleteSubjectCont();
				}
				else 
				{
					$this->showError("Page not found", "Page for execution" . $sub . " was not found");
				}
		}
		catch(Exception $e)
		{
			$this->showError("Application error", $e->getMessage());
		}
    }

    //Show all Subject Data
    public function showAllSubjectCont(){
        $subjects = $this->sub_model->getAllSubject();
        include ROOT_PATH . 'views/subject/subject.php';
        //echo "sadfasdfasdf";
    }

    //Show Single Subject
    public function showSubjectCont(){
        $id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id)
		{
			throw new Exception('Internal error');
		}

        $subjects = $this->sub_model->getSubject($id);
        include ROOT_PATH . 'views/subject/show.php';
    }

    //Add new subject
    public function addSubjectCont(){

        if(isset($_POST["submit"])){

            $sub_data = array(
                "subject_name" => $_POST["subject_name"],
                "subject_desc" => $_POST["subject_desc"],
                "subject_teacher" => $_POST["subject_teacher"]
            );
            
            try
			{
				$this->sub_model->addSubject($sub_data);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
            
        }

        include ROOT_PATH . 'views/subject/add.php';
    }


    //Edit subject
    public function editSubjectCont(){

        $id = $_GET['subject_id'];

        $sub_data = $this->sub_model->getSubject($id);

        if(isset($_POST["submit"])){

            $sub_data = array(
                "subject_name" => $_POST["subject_name"],
                "subject_desc" => $_POST["subject_desc"],
                "subject_teacher" => $_POST["subject_teacher"]
            );
            
            try
			{
				$this->sub_model->updateSubject($sub_data, $id);
				$this->redirect('subject.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
            
        }

        include ROOT_PATH . 'views/subject/edit.php';
    }


    // Delete subject
    public function deleteSubjectCont(){

        $id = isset($_GET['subject_id']) ? $_GET['subject_id'] : null;

        $result = $this->sub_model->deleteSubject($id);
        
        if($result){
            echo '<div class="alert alert-danger" role="alert">
            Successfully Deleted
          </div>';
        }else{
            echo '<div class="alert alert-warning" role="alert">
            Failed Delete
          </div>';
        }

        include ROOT_PATH . 'views/subject/subject.php';
        $this->redirect('index.php');

    }

}

