<?php
$temp = "The date is";
echo longdate(time());

function longdate($timetamp, $text)
{
    return $text.date("l F jS Y", $timetamp);
}
?>