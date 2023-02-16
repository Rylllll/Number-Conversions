<?php
function wordto_number($word){

if (isset($_POST['submit'])) {
  $number_array = array(
    'zero' => 0,
    'one' => 1,
    'two' => 2,
    'three' => 3,
    'four' => 4,
    'five' => 5,
    'six' => 6,
    'seven' => 7,
    'eight' => 8,
    'nine' => 9,
    'ten' => 10,
    'eleven' => 11,
    'twelve' => 12,
    'thirteen' => 13,
    'fourteen' => 14,
    'fifteen' => 15,
    'sixteen' => 16,
    'seventeen' => 17,
    'eighteen' => 18,
    'nineteen' => 19,
    'twenty' => 20,
    'thirty' => 30,
    'fourty' => 40,
    'fifty' => 50,
    'sixty' => 60,
    'seventy' => 70,
    'eighty' => 80,
    'ninety' => 90,
    'hundred' => 100,
    'thousand' => 1000,
    'million' => 1000000,
    'billion' => 1000000000,
    'trillion' => 1000000000
  );
   $input = $word;
  // remove any special characters from the input
  $word = preg_replace('/[^A-Za-z\s]/', '', $word); 
  $word_array = explode(" ", $word);


  $total = 0;
  $temp = 0;
  $error="";

  //This ensures that the loop will continue running as long as there are more elements in the array to process.
  for ($i = 0; $i < count($word_array); $i++) {
//check if exist in array
    if (array_key_exists($word_array[$i], $number_array)) {
      //If the word is "hundred", the value of temp is multiplied by 100.
      //it multiplies the current value of the "temp" variable (which presumably contains the running total of the number being evaluated) by 100.
      if ($word_array[$i] == "hundred") {
        $temp *= $number_array[$word_array[$i]];
      // if the value of temp is thousand to million multiplied by next value
      } else if ($word_array[$i] == "thousand" || $word_array[$i] == "million" || $word_array[$i] == "billion") {
        $total += $temp * $number_array[$word_array[$i]];

      // then reset the value to 0
        $temp = 0;
      } else {
        $temp += $number_array[$word_array[$i]];
      }
    }
    else{
      
      $total = ($error);
      echo $error ="<script type='text/javascript'>
      Swal.fire({
          title: 'Invalid Input',
          text: 'Please enter a number or number phrases',
          icon: 'error',
          confirmButtonText: 'OK'
      });
    </script>";
    }
  }
//the value of temp is added to the running total.
  
  //$total += $temp;
  $total = intval($total) + $temp;
 echo "<div class= 'Des'>$total</div>";
}
$host = "localhost";
$root = "root";
$pass = "";
$dbName = "assi";


$mysqli= new mysqli($host, $root, $pass, $dbName);
//$stmt = $mysqli->prepare('INSERT INTO "assi" (input, soutput) VALUES ("$input", "$soutput")');
$stmt = "insert into assi (input, soutput) VALUES ('$input', '$total')";
//$stmt->bind_param('ss', $input, $soutput);
//$stmt->execute();
mysqli_query($mysqli,$stmt);


} 

?>
