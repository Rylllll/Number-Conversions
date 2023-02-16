<?php
$convertNumber = $sendNumber = '';

// conversion
function numberto_word($number){
  $input = $number;
//Round number to nearest integer
           $no = floor($number);
           $point = round($number - $no, 2) * 100;
// length of integer
           $hundred = null;
           $digits_1 = strlen($no);
           $i = 0;
           $str = array();
//one to tens array
           $words = array('0' => 'zero', '1' => 'one', '2' => 'two','3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six','7' => 'seven', '8' => 'eight', '9' => 'nine','10' => 'ten', '11' => 'eleven', '12' => 'twelve','13' => 'thirteen', '14' => 'fourteen', '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen','18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty','30' => 'thirty', '40' => 'forty', '50' => 'fifty','60' => 'sixty', '70' => 'seventy','80' => 'eighty', '90' => 'ninety');
//hundred to Quintillion array
           $big = array('', 'Hundred', 'Thousand', 'Million', 'Billion' , 'Trillion', 'Quadrillion', 'Quintillion');
//The value of $i change depends on the divider
           while ($i < $digits_1) {
             $divider = ($i == 2) ? 10 : 100;
             $number = floor($no % $divider);
             $no = floor($no / $divider);
             $i += ($divider == 10) ? 1 : 2;
//If the number is equals to zero papasok yung word ibibgay nya sa str
             if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? ' ' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' ': null;
                $str [] = ($number < 21) ? $words[$number] .
                    " " . $big[$counter] . $plural . " " . $hundred
                    :
                    $words[floor($number / 10) * 10]
                    . " " . $words[$number % 10] . " "
                    . $big[$counter] . $plural . " " . $hundred;
             } 
// Else reverse the empty array to combine the elements 
			 else $str[] = null;	
          }
          $str = array_reverse($str);
          $result = implode('', $str);
          $points = ($point) ?
            ". " . $words[$point / 10] . " " . 
                  $words[$point = $point % 10] : '';
         $convertNumber = ucwords(strtolower($result . $points)) . "";

//Display the result
      
       echo "<div class= 'Dess' >$convertNumber</div>";

       $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "assi";


$mysqli= new mysqli($host, $dbUsername, $dbPassword, $dbName);
//$stmt = $mysqli->prepare('INSERT INTO "assi" (input, soutput) VALUES ("$input", "$soutput")');
$stmt = "insert into assi (input, soutput) VALUES ('$input', '$convertNumber')";
//$stmt->bind_param('ss', $input, $soutput);
//$stmt->execute();
mysqli_query($mysqli,$stmt);
  
}



 ?>


<?php 
  if($sendNumber > 0){ 
?>

<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Assignment</title>
</head>
<body>
</body>
</html>
