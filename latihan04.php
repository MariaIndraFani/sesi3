<?php
//Model 1
//$cars = array("Volvo","BMW","Toyota",)

//Model 2
$cars[0] = "volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

header('Content-type: application/json; charset=utf-8');
echo json_encode($cars);