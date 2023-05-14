
<?php 
    function digitam_parseTimeStamp($time) {
       // $months = array(1=>'jan', 2=>'Feb', 3=>'Mar', 4=>'Apr', 5=>'May',6=>'Jun', 7=>'Jul', 8=>'Aug',9=>'Sep', 10=>'Oct', 11=>'Nov', 12=>'Dec' );
        $months = array(1=>'01', 2=>'02', 3=>'03', 4=>'04', 5=>'05', 6=>'06', 7=>'07', 8=>'08', 9=>'09', 10=>'10', 11=>'11', 12=>'12');
     
        list($year, $month, $date, $hour, $min, $sec) = sscanf($time, "%4d %2d %2d %2d %2d %2d");
       //To see the values that have each variables
        echo "<br/>"."year:  ".$year."  month:  ".$month."  date:  ".$date."  hour:  ".$hour."  min:  ".$min."  sec:  ".$sec;
        //More space between lines
        echo "<br/>";

                // Ensure that the hour is within the range of 0 to 23
          //  $hour = min($hour, 23);


            // Pad the hour, minute, and second with leading zeros
           /*
            $hour = sprintf("%02d", $hour);
            $minute = sprintf("%02d", $minute);
            $second = sprintf("%02d", $second);
            */

            // Format the output as "MMM/DD hh:mm"
            //$formatted_date = sprintf("%s/%02d %s:%s", $months[$month], $day, $hour, $minute);

            // Return the formatted date
           // return $formatted_date;

                $hour=($hour%24);
                if($hour==0){ 
                    $hour =12;
                    echo "<br/>";
                }
                if($hour<10) {
                    $hour = "0$hour";
                    echo "<br/>";
                }
                if($date < 10){ 
                    $date = "0$date";
                // echo "<br/>";   
                }
                if($min < 10){
                    $min = "0$min";
                // echo "<br/>";
                }
                if($sec < 10 ){ 
                    $sec = "0$sec";
                    //echo "<br/>";
                }
             //to see what returns the function  
             print_r("{$months[$month]}/$date\n$hour:$min" );
             echo "<br/>";
             return "{$months[$month]}/$date\n$hour:$min";  
    }
        //I execute the function with this Date and time format in php. yyyy mm dd hh mm ss
         digitam_parseTimeStamp("2014 09 08 22 10 06");
        //Second trial 
        digitam_parseTimeStamp("2016 07 01 20 05 04");      
?>

