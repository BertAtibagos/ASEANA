<html>
<head>
	<script>
		 function dataVal(){
	            var submit_stat = false;
	            var Bus_name = document.getElementById("busi_name").value;
	            var TX_name = document.getElementById("taxp_name").value;
	            var bus_line = document.getElementById("busi_line").value;
	            var act = document.getElementById("busi_act").value;
                var reg_date = document.getElementById("reg_date").value;
                var address = document.getElementById("addr").value;
                var brgy = document.getElementById("brgy").value;
				var busi_type = document.getElementById("busi_type").value;
	
                if(Bus_name == "" && TX_name == "" && bus_line == "" && act == "" && reg_date == "" && address == "" && brgy == "" && busi_type == ""){
                    alert("Some fields are required.");
                } else {
                    submit_stat = true;
                }
                
                if(submit_stat == true){
                    header('Refresh: 1');
                } else {
                    event.preventDefault();
                }
            }
	</script>
</head>
<body>

<h3>Advance Search</h3>
<form action="search_result_ASEANA.php" method=POST onsubmit="dataVal()">
	<input type="text" placeholder="Business Name" name="busi_name" id="busi_name">
	<input type="text" placeholder="Ex: YYYY-MM-DD" name="reg_date" id="reg_date">
	<input type="submit" value="Search">
</form>
<form action="ASEANA.php">
    <input type="submit" value="Return">
</form>
<?php
include 'connection.php';

$busi_name =$_POST["busi_name"];
/*$taxp_name =$_POST['taxp_name'];
$busi_type =$_POST['busi_type'];
$addr =$_POST['addr'];
$brgy =$_POST['brgy'];
$busi_line =$_POST['busi_line'];
$busi_act =$_POST['busi_act'];*/
$reg_date =$_POST["reg_date"];

if($reg_date == ""){
	$sql = "SELECT * FROM businessdt_tbl WHERE BUSINESS_NAME LIKE '%$busi_name%'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)> 0){
		echo"<TABLE border=2 cellpadding=5><TR><TH>Registration ID</TH><TH>BUSINESS_NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
		<TH>BUSINESS_LINE</TH><TH>ACTIVITY</TH><TH>REG_DATE</TH><TH>BUSINESS_CERT</TH>";
		while($row = mysqli_fetch_assoc($result)){
			echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
			<TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD><TD>" .$row["BUSINESS_CERT"]. "</TD>
			</TR>";
		}
		echo"</TABLES>";
	}else {
		echo"No records found!";
	}
	mysqli_close($conn);
}elseif($busi_name == ""){
    $sql = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$reg_date%'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)> 0){
		echo"<TABLE border=2 cellpadding=5><TR><TH>Registration ID</TH><TH>BUSINESS_NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
		<TH>BUSINESS_LINE</TH><TH>ACTIVITY</TH><TH>REG_DATE</TH><TH>BUSINESS_CERT</TH>";
		while($row = mysqli_fetch_assoc($result)){
			echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
			<TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD><TD>" .$row["BUSINESS_CERT"]. "</TD>
			</TR>";
		}
		echo"</TABLES>";
	}else {
		echo"No records found!";
	}
	mysqli_close($conn);
}else{
    $sql = "SELECT * FROM businessdt_tbl WHERE BUSINESS_NAME LIKE '%$busi_name%'";
    $sql2 = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$reg_date%'";
	$result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result)> 0){
		echo"<TABLE border=2 cellpadding=5><TR><TH>Registration ID</TH><TH>BUSINESS_NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
		<TH>BUSINESS_LINE</TH><TH>ACTIVITY</TH><TH>REG_DATE</TH><TH>BUSINESS_CERT</TH>";
		while($row = mysqli_fetch_assoc($result)){
			echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
			<TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD><TD>" .$row["BUSINESS_CERT"]. "</TD>
			</TR>";
		}
		echo"</TABLE>";
	}else {
		echo"No records found!";
	}

    $sql = "SELECT * FROM businessdt_tbl WHERE REG_DATE LIKE '%$reg_date%'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)> 0){
		echo"<TABLE border=2 cellpadding=5><TR><TH>Registration ID</TH><TH>BUSINESS_NAME</TH><TH>TAXPAYER</TH><TH>TYPE</TH><TH>ADDRESS</TH><TH>BARANGAY</TH>
		<TH>BUSINESS_LINE</TH><TH>ACTIVITY</TH><TH>REG_DATE</TH><TH>BUSINESS_CERT</TH>";
		while($row = mysqli_fetch_assoc($result)){
			echo"<TR><TD>". $row["REG_ID"]. "</TD><TD>". $row["BUSINESS_NAME"]. "</TD><TD>" . $row["TAXPAYER"]. "</TD><TD>" .$row["TYPE"]. "</TD><TD>" .$row["ADDRESS"]. "</TD>
			<TD>" .$row["BARANGAY"]. "</TD><TD>" .$row["BUSINESS_LINE"]. "</TD><TD>" .$row["ACTIVITY"]. "</TD><TD>" .$row["REG_DATE"]. "</TD><TD>" .$row["BUSINESS_CERT"]. "</TD>
			</TR>";
		}
		echo"</TABLES>";
	}else {
		echo"No records found!";
	}
	mysqli_close($conn);
}
?>
</body>
</html>