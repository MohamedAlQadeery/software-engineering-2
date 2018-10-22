<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract Factory Testing</title>
</head>
<body>

<?php
spl_autoload_register(function($className){
    include_once $className . '.php';
});

$course = Course::getCourse();
$course->setDegree(new BscDegree());
$course->setTeacher(new BscTeacher());
$course->viewData('SE2','Studying DP\'s','Mohamed');


$course = Course::getCourse();
$course->setDegree(new MscDegree());
$course->setTeacher(new MscTeacher());
$course->viewData('SE2','Studying DP\'s','Ali');


$course = Course::getCourse();
$course->setDegree(new DiplomaDegree());
$course->setTeacher(new DiplomaTeacher());
$course->viewData('SE2','Studying DP\'s','Ahmed');
?>
</body>
</html>