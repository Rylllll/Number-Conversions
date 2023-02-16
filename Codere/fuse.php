
<?php
include("word.php");
include("number.php");




?> 
    
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
  

<link rel="stylesheet" href="sweetalert2.min.css">
	<title>Assignment</title>
</head>

<body>

<form action= " " method="POST">


<div id="content-container" >
			<div id="page_desktop___1_ek1"  >
				<div id="_bg__desktop___1_ek2"  ></div>

				<div id="container"  >
					<div id="container_ek1"  ></div>
					<input id="input" type="text" name="number" class="textbox" placeholder="Enter Number or Name" required ></input>

					<div id="direct"  >
						<div id="input_number_or_number_phrases" >
							Input number or number phrases
						</div>
						<img src="skins/icons8_right_100_1.png" id="icons8_right_100_1" />

					</div>

					<div id="direct_ek1"  >
						<div id="history" >
							History

                      
					</div>
						<img src="skins/icons8_right_100_1_ek1.png" id="icons8_right_100_1_ek1" />

					</div>

					<div id="logo"  >
						<div id="number_conversion" >
							Number Conversion
						</div>
						<div id="rectangle_2"  ></div>
						<div id="rectangle_3"  ></div>

					</div>
					<div id="rectangle_6"  >

                    <table id="tab"> 
	<tr> 
		<th colspan="4"><h2>Conversion History</h2></th> 
		</tr> 
			  <th> User Input </th> 
			  <th> Output </th> 
			  
		</tr> 

        <?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "assi";

$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
$result = mysqli_query($conn, "SELECT * FROM assi");

$num_rows = mysqli_num_rows($result);

while ($row = mysqli_fetch_assoc($result)) {
    // Only display the first 5 rows
    if ($num_rows > 5) {
        $num_rows--;
    } else {
?>
        <tr>
            <td><?php echo $row['input']; ?></td> 
            <td><?php echo $row['soutput']; ?></td>
        </tr>
<?php
    }
}
mysqli_close($conn);
?>

         

</table> 
                    </div>

					<div id="output">

						<div id="rectangle_7"  ></div>
                        <!--php na----------------------------------------------------->
						<div id="output_" ><p>Output:</p>
                        

                        <div class="Des"><?php if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST['number'];
    
    if(is_numeric($input)){
        if((int)($input)<0 || (int)($input)>999999999999){
            echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Invalid Input',
                        text: 'Please enter a number between 0 and 999,999,999,999.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                  </script>";                  
        }   
        else{
            numberto_word($input);   
        }
    }
    else{
        wordto_number($input); 
    }
}
?>

</div>

                        </div>



                        <div id="output_1" ><p>Dollar:</p>
                        

                        <div class="Des1"><?php if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input = $_POST['number'];
    $amount = $input;
    if(is_numeric($input)){
        if((int)($input)<0 || (int)($input)>999999999999){
            echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Invalid Input',
                        text: 'Please enter a number between 0 and 999,999,999,999.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                  </script>";                  
        }   
        else{

            $endpoint_url  =  'https://api.exchangerate.host/convert?from=PHP&to=USD';
            $response  = file_get_contents($endpoint_url);
            $data = json_decode($response,  true);
            $conversion_rate = $data['result'];
            $value = $input;
            $usd_val =  $conversion_rate * $value;
            echo $usd_val;
        }
    }
    

}
?>

</div>

                        </div>
                          
                          

						

					</div>
					<button id="submit" name="submit" type="submit" class="but">Submit</button>

					<div id="boxdes"  >
						<div id="rectangle_9"  ></div>
						<img src="skins/saly_10.png" id="saly_10" />
						<div id="number_to_words_converter_and_vice_versa" >
							<span style="font-style:normal; font-weight:normal; text-decoration:NONE; ">Number</span><span style="font-family: 'Poppins', sans-serif; font-style:normal; font-weight:normal; text-decoration:NONE; "> to </span><span style="font-style:normal; font-weight:normal; text-decoration:NONE; ">Words <br/></span><span style="font-family:Poppins; font-style:normal; font-weight:normal; text-decoration:NONE; ">              Converter <br/>     </span><span style="font-style:normal; font-weight:normal; text-decoration:NONE; ">and</span><span style="font-family:Poppins; font-style:normal; font-weight:normal; text-decoration:NONE; "> vice versa</span>
						</div>

					</div>

					<div id="linehead"  >
						<div id="rectangle_10"  ></div>
						<div id="rectangle_11"  ></div>

					</div>

					<div id="check"  >

						<div id="saly_26"  >
							<img src="skins/saly_26_ek1.png" id="saly_26_ek1" />

						</div>

						<div id="saly_42"  >
							<img src="skins/saly_42_ek1.png" id="saly_42_ek1" />

						</div>

					</div>

				</div>

			</div>
		</div>
<!-- testing --------------------------------------------------------------------------->
</form>

<style type = "text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  table{
  border: none;
  border-radius:20px;
  width: 989.35px;
  height: 411.22px;
 
}

table h2{
 background-color: #28e7ef;
 color: black;
border-radius:20px;
 height:30px;
 padding: 30px;
 margin:auto;
 
}

th{
    border-radius:20px;
   
    text-align:center;
    padding: 15px;
    margin:auto;
}

td{
    border-radius:20px;
 
    text-align:center;
    padding: 15px;
    margin:auto;
}


#output_1 {
	position: absolute;
	top: 80px;
	left: 16px;
	width: 721px;
	height: 168px;
	overflow: hidden;
	font-family: Poppins;
	font-size: 20px;
	font-weight: bold;
	text-align: left;
	color:#FFFFFF;
}

.Des{
	position: absolute;
	top: 20px;
    left: 100px;
	width:700px;

	
}
.Des1{
	position: absolute;
	top: 20px;
    height:0px;
    width:700px;
    left: 100px;
}
</style>


</body>
</html>
