<?php
require_once './student.php';
require_once './db.php';

$student = new Student();
$student->create($_POST);

header("Location: ./");

// if($student->create($_POST) != true){
//     // redirect with error
// } else {
//     // redirect without error
// }
