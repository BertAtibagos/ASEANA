<?php
include 'connection.php';

$business_name = $_POST["Bus_name"];
$TAXpayer_name = $_POST["TAX_name"];
$business_type = $_POST["bus_type"];
$business_line = $_POST["bus_line"];
$activity = $_POST["activity"];
$reg_date = $_POST["reg_date"];
$address = $_POST["address"];
$barangay = $_POST["brgy"];
$business_cert = $_POST["bus_cert"];
$insert_stat = false;
$insert_ctr = 1;


while($insert_stat == false){
	$sql_count = "SELECT * FROM businessdt_tbl WHERE REG_ID LIKE '%REG%'";
	$curr_num =mysqli_num_rows(mysqli_query($conn, $sql_count));
	$gen_code ="REG" . ($curr_num + $insert_ctr);
	$sql_check_dupes = "SELECT * FROM businessdt_tbl WHERE reg_id = '$gen_code'";
	$sql_dupe_rows = mysqli_num_rows(mysqli_query($conn, $sql_check_dupes));
	
	if($sql_dupe_rows > 0){
		$insert_ctr++;
	}else{
		$insert_stat = true;
	}
}

$sql = "INSERT INTO businessdt_tbl VALUES('$gen_code','$business_name', '$TAXpayer_name', '$business_type', '$address', '$barangay', 
'$business_line', '$activity', '$reg_date', '$business_cert')";
$result = mysqli_query($conn,$sql);

if(!$sql){
    print("Failed to insert data!");
}else{
    print("Data insert successful!");
	header('Refresh: 1; URL=display_data_ASEANA.php');
}
?>