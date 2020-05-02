<?php
//require 'models/student.php';
require_once 'controllers/StudentController.php';
//require_once 'controllers/SubjectController.php';

$stud_controller = new StudentController;
//$subj_controller = new SubjectController;

//$subj_controller->handleRequest();

$stud_controller->handleRequest();
?>