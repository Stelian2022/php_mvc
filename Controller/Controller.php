<?php 
include '../Model/Model.php';

// $resultats=$conn->select("SELECT *  FROM `employees` WHERE first_name LIKE ? OR last_name LIKE ?",
// ["%k%i%","%k%i%"]
// );

$resultats=$conn->select("SELECT * FROM first_name,last_name FROM `employees` WHERE first_name LIKE ? OR last_name LIKE ?",
["%{$_POST["recherche"]}%","%{$_POST["recherche"]}%"]
);

echo json_encode(count($resultats)== 0 ? null : $resultats);


