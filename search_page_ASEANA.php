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
</body>
</html>