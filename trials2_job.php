
<?php 
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

                if ($hour==0)
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
        //   $month = 0; $day = 0; $hour=0; $min=0; $sec=0;
           echo "Enter a valid date";
   
             //to see what returns the function  
          //   print_r("{$months[$month]}/$date\n$hour:$min" );
            
    }
        //I execute the function with this Date and time format in php. yyyy mm dd hh mm ss
         digitam_parseTimeStamp("2014 09 26 26 59 06");
        //Second trial 
       //  digitam_parseTimeStamp("2016 07 01 21 05 04");      
?>

