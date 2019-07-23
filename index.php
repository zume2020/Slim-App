<?php
 require "vendor/autoload.php";

$app = new \Slim\Slim();

$app->get('/hello/:name',function($name){
             
           echo "Hello,$name" //this is what going to display on the page
});
$app->run();
?>
