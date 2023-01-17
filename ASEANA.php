<html>
    <head>
        <style>
            .container{
                margin:auto;
                width:25%;
                height:55%;
                margin-top:5%;
                padding: 15px;
                border-style: solid;
                border-width: 2px;
            }
            .submt{
                text-align:center;
                margin:auto;
            }
        </style>
        <script>
            function dataVal(){
	            var submit_stat = false;
	            var Bus_name = document.getElementById("Bus_name").value;
	            var TX_name = document.getElementById("TX_name").value;
	            var bus_line = document.getElementById("business_line").value;
	            var act = document.getElementById("act").value;
                var reg_date = document.getElementById("reg_date").value;
                var address = document.getElementById("address").value;
                var cert = document.getElementById("cert").value;
                var brgy = document.getElementById("brgy").value;
	
                if(Bus_name == "" || TX_name == "" || bus_line == "" || act == "" || reg_date == "" || address == "" || cert == "" || brgy == ""){
                    alert("Some fields are required.");
                } else {
                    submit_stat = true;
                }
                
                if(submit_stat == true){
                    alert("Sending data...");
                } else {
                    event.preventDefault();
                }
            }
        </script>
    </head>
    <body>
            <form method=POST action="Insert_data_ASEANA.php" onsubmit="dataVal()">
                <div class="container">
                <center>
                <h2 style="font-family:Arial">Local Government Unit</h2>
                <h4 style="color: grey; font-family:Arial"> Business Data Mining Form</h4>
                </center>
                <label for="Bus_name" style="font-family:Arial; font-weight:bold">Business Name:</label>
                <input type="text" placeholder="Business Name" id="Bus_name" name="Bus_name"><br><br>

                <label for="TX_name" style="font-family:Arial; font-weight:bold">Tax payer name:</label>
                <input type="text" placeholder="Tax payer name" id="TX_name" name="TAX_name"><br><br>

                <label for="business_Type" style="font-family:Arial; font-weight:bold">Business Type:</label>
                <select id="business_Type" name="bus_type">
                    <option>Single proprietor</option>
                    <option>Corporation</option>
                    <option>Partnership</option>
                </select><br><br>

                <label for="business_line" style="font-family:Arial; font-weight:bold">Business Line:</label>
                <input type="text" placeholder="Business Line" id="business_line" name="bus_line"><br><br>

                <label for="act" style="font-family:Arial; font-weight:bold">Activity:</label>
                <input type="text" placeholder="Ex: Printing Services" id="act" name="activity"><br><br>

                <label for="reg_date" style="font-family:Arial; font-weight:bold">Registration Date:</label>
                <input type="text" placeholder="Ex: YYYY-MM-DD" id="reg_date" name="reg_date"><br><br>

                <label for="address" style="font-family:Arial; font-weight:bold">Address</label>
                <input type="text" placeholder="Address" id="address" name="address"><br><br>

                <label for="brgy" style="font-family:Arial; font-weight:bold">Barangay:</label>
                <input type="text" placeholder="Barangay" id="brgy" name="brgy"><br><br>

                <label for="cert" style="font-family:Arial; font-weight:bold">Business Certificate:</label>
                <input type="file" id="cert" name="bus_cert"><br><br>
                
                <input type="submit" value="Submit" class="submt">
                </div>
                </form>
                <form action="display_data_ASEANA.php">
                    <input type="submit" value="Display Data">
                </form>
                <form action="search_page_ASEANA.php">
                    <input type="submit" value="Advance Search">
                </form>
    </body>
</html>