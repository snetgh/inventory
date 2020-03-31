
<?php
require_once '../db.php';


$secret_id = $_POST['secret_id'];
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$title = $_POST['title'];
$date = $_POST['date'];


$count_items = count($_POST["item"]);

for ($i=0; $i < $count_items; $i++) { 

    $item_name = $_POST['item'][$i];
    $performance = $_POST['performance'][$i];
    $downtime = $_POST['downtown'][$i];
    $cause = $_POST['cause'][$i];
    $solution = $_POST['solution'][$i];

    if($item_name != ""){
    	$run_insert_query = mysqli_query($connectionString,"INSERT INTO `reports` (`id`, `secret_id`, `report_to`, `report_from`, `report_date`, `report_subject`, `report_title`, `report_item`, `performance`, `downtime`, `cause`, `solution`, `timestamp`) VALUES (NULL, '$secret_id', '$to', '$from', '$date', '$subject', '$title', '$item_name', '$performance', '$downtime', '$cause', '$solution', current_timestamp())")or die(mysqli_error($connectionString));
    }

    
}



if($run_insert_query){
    echo 'success';
}else{
    echo 'error';
}
