<html>
<body>
<?php
include 'connection.php';
echo"<BR>";

$sql = "SELECT * FROM businessdt_tbl";
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
?>
<form action="ASEANA.php">
    <input type="submit" value="Return">
</form>
</body>
</html>