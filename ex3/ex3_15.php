<?php
$temp = "The date is";
echo longdate(time());

function longdate($timetamp)
{
  return date("l F jS Y", $timetamp);
}
?>