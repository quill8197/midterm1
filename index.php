<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate Fat-Free with an instance of the base class
$f3 = Base::instance();

//turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function()
{
    echo '<h1>Midterm Survey</h1>';
    echo '<a href="survey">Take my midterm survey</a>';
});

//Run Fat-Free
$f3->run();