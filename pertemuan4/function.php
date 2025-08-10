<?php

//date and time
//date(), time(), mktime(), strtotime()

//mktime(0,0,0,0,0,0)
//mktime(hour, minute, second, month, day, year)
echo "the day I was born: ";
echo date("l, d m Y", mktime(0, 0, 0, 11, 13, 2008) );


// strtotime("(date) (month) (year)");
echo "<br> <br> the day I entered high school: ";
echo date("l, d m Y", strtotime("15 july 2024"));

// echo date("l, d m Y");
// echo time(); !!time() returns the current timestamp in seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
echo "<br> <br> hundred days from now: ";
echo date("l, d m Y" , time() + 60 * 60 * 24 * 100 );

?>