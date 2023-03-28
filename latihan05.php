<?php
$age = array("peter"=>"35","Ben"=>"37" ,"joe"=>"43");
header('Content-type: application/json; charset=utf-8');
echo json_encode($age);