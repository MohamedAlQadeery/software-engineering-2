<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
// put your code here
spl_autoload_register(function($className){
    include_once $className . '.php';
});
$it1 = factoryDp::createStudent('IT');
$it1->view();
$it2 = factoryDp::createStudent('IT');
$it2->view();
$eng = factoryDp::createStudent('eNg');
$eng->view();
$art = factoryDp::createStudent('art2');
$art->view();
?>
</body>
</body>
</html>

