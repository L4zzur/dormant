<?php

$time = isset($_GET["date"]) ? strtotime($_GET["date"]) : time();
if ($time === false)
{
	$time = time();
}

$secondInDay = 60 * 60 * 24;
$dayBefore = $time - $secondInDay;
$dayAfter = $time + $secondInDay;

return [
	["url" => "/?date=" . date("Y-m-d", $dayBefore), "text" => "Prev day"],
	["url" => "/?date=" . date("Y-m-d", $dayAfter), "text" => "Next day"],
	["url" => "/", "text" => "Today"],
	["url" => "/report.php", "text" => "Report"],
];
