<?php

require '../models/StudentModel.php';

class StudentController{

    private $student;

    public function __construct(){
        $this->student = new StudentModel;
    }

    public function index(){
        include '../views/layouts/header.php';
        $this->student->getAllStudent();
        include '../views/student/index.php';
        include '../views/layouts/footer.php';
    }

    public function show(){

    }

}

$test = new StudentController;
$test->index();