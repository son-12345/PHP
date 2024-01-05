<?php
$temp = "The date is";
echo longdate(time());

function longdate($timetamp)
{
    global $temp;
    return $temp . date ("l F jS Y", $timetamp);

}
?>