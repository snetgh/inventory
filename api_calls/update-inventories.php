<?php
require_once '../db.php';



$clear_table_first = mysqli_query($connectionString,"TRUNCATE `report_step`.`inventory`");

if($clear_table_first){

$count_items_in_department = count($_POST["department"]);

for ($i=0; $i < $count_items_in_department; $i++) { 

    $current_name = $_POST['name'][$i];
    $current_quantity = $_POST['quantity'][$i];
    $current_serial = $_POST['serial'][$i];
    $current_remarks = $_POST['remarks'][$i];
    $current_department = $_POST['department'][$i];

    if($current_name != ""){
    	$run_insert_query = mysqli_query($connectionString,"INSERT INTO `inventory` (`inventory_id`, `name`, `quantity`, `serial`, `remarks`, `departments`, `timestamp`) VALUES (NULL, '$current_name', '$current_quantity', '$current_serial', '$current_remarks', '$current_department', current_timestamp())")or die(mysqli_error($connectionString));
    }  
}

}

if($run_insert_query){
    echo 'success';
}else{
    echo 'error';
}

       