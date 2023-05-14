<?php 
   // I ask for enter the date by inputKey     
    if($_POST){
        $time = $_POST['time'];

        echo "The time is ".$time."<br/>";

        digitam_parseTimeStamp($time);
    }
    // I pass variable time by parameter
    function digitam_parseTimeStamp($time) {
        // I removed the first array for two reasons: 1) they had the same name, the second one overwrote the first one. 
        //And secondly, there was no need, since the variable month represents the index number of the array, which is 
        //identical to the month to be represented.

        $months = array(1=>'01', 2=>'02', 3=>'03', 4=>'04', 5=>'05', 6=>'06', 7=>'07', 8=>'08', 9=>'09', 10=>'10', 11=>'11', 12=>'12');
         list($year, $month, $day, $hour, $min, $sec) = sscanf($time, "%4d %2d %2d %2d %2d %2d");
        //To see the values that have each variables
          //More space between lines
         echo "<br/>";

           if ( $month<12 && $day<=31 && $hour<=24 && $min<=60 && $sec<=60 ){

                if($hour==0)
                  $hour = 12;

                if($hour<10)
                  $hour = "0$hour";

                if($day<10)
                  $day = "0$day";

                if($min<10)
                 $min = "0$min";

                if($sec<10)
                  $sec = "0$sec";

                 echo "<br/>"."year:  ".$year."  month:  ".$month."  day:  ".$day."  hour:  ".$hour."  min:  ".$min."  sec:  ".$sec."<br/>";
                 print_r("{$months[$month]}/$day\n$hour:$min");
                 return "{$months[$month]}/$day\n$hour:$min";  
           }
           else 
       
           echo "Enter a valid date";          
    }        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{        
            align-content: center;
            text-align: center;        
        }
      .container input {
        width: 20%;
        padding: 10px;  
        margin-top: 30px;        
      }

      h3 {
        margin-top: 60px;
        color: black;    
      }
    </style>

</head>
<body>
<div class="container">  
    <form action="trials3_job.php" method="post">       
        <h3>Enter the date in format yyyy mm dd hh mm ss  </h3>    
        <input type="text" name="time" >
        <br/>
        <input type="submit" value="Send">
    </form>
</div>
</body>
</html>