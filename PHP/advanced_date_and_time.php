<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            $x = date("d-m-Y (l)"); echo $x."<br>";

            $x = date("h:i:s (a)"); echo $x."<br>";

            $x = date("H:i:s (a)"); echo $x."<br>";

            $x = date_default_timezone_get()."<br>"; echo $x."<br>";

            date_default_timezone_set("America/New_York");
            $x = date("H:i:s (a)"); echo $x."<br>";

            $x = mktime(11, 45, 55, 1, 15, 2018);
            $x = date("Y-m-d (l): h:i:s (a)", $x);
            echo $x."<br>";

            $x = strtotime("10:34:12am 21 August 2001");
            $x = date("Y-m-d (l): h:i:s (a)", $x);
            echo $x."<br>";

            $x = strtotime("tomorrow");
            // $x = strtotime("next Sunday");
            // $x = strtotime("+3 months");
            $x = date("Y-m-d (l)", $x);
            echo $x."<hr>";

            $start = strtotime("Saturday");
            $end = strtotime("+6 weeks", $start);
            while($start < $end) {
                $x = date("M d",$start);
                echo $x.", ";
                $start = strtotime("+1 week",$start);
            }
            echo "<hr>";

            $fix = strtotime("August 01");
            $cnt = $fix - time();
            $day = $cnt/(60*60*24);
            echo $day."<br>";
        ?>
    </body>
</html>
<!-- d - Represents the day of the month (01 to 31) -->
<!-- m - Represents a month (01 to 12) -->
<!-- Y - Represents a year (in four digits) -->
<!-- l (lowercase 'L') - Represents the day of the week -->

<!-- H - 24-hour format of an hour (00 to 23) -->
<!-- h - 12-hour format of an hour with leading zeros (01 to 12) -->
<!-- i - Minutes with leading zeros (00 to 59) -->
<!-- s - Seconds with leading zeros (00 to 59) -->
<!-- a - Lowercase Ante meridiem and Post meridiem (am or pm) -->

<!-- to make a specific time, we should use mktime() | to manipulate current time, we should use strtotime() -->
<!-- mktime(hour, minute, second, month, day, year) -->
<!-- strtotime("tomorrow | +3 weeks | next Monday | August 01") -->
<!-- strtotime() and mktime() returns the specified time in millisecond -->

<!-- we can use the date() function to automatically update the copyright year on your website -->