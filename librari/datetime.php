<?php
current_date();

function current_date()
{
date_default_timezone_set("Asia/Jakarta");

$thedate = getdate();
$day = $thedate["mday"];
$month = $thedate["mon"];
$year = $thedate["year"];
$hours = $thedate["hours"];
$minutes = $thedate["minutes"];
$seconds = $thedate["seconds"];

$current_date = "$day/$month/$year $hours:$minutes:$seconds";
echo "<div color=red><strong>" . $current_date . "</strong></div>";
}
?>