<?php

require_once __DIR__ . "/../config.php";

$title = "Dormant // Report";

$allTodos = getAllTodos();

$totalDays = count($allTodos);
$totalTasks = array_reduce($allTodos, function ($prev, $todos) {
	return $prev + count($todos);
}, 0);
$totalCompletedTasks = array_reduce($allTodos, function ($prev, $todos) {
	$completed = array_filter($todos, fn ($todo) => $todo["completed"]);
	return $prev + count($completed);
}, 0);

$dailyTasks = array_map(function ($todos) {
	return count($todos);
}, $allTodos);
$minTasks = min($dailyTasks);
$maxTasks = max($dailyTasks);

$avgTasks = 0;
$avgCompletedTasks = 0;
if ($totalDays > 0)
{
	$avgTasks = (int)($totalTasks / $totalDays);
	$avgCompletedTasks = (int)($totalCompletedTasks / $totalDays);
}

$report = [
	"Total days: $totalDays",
	"Total tasks: $totalTasks",
	"Total completed tasks: $totalCompletedTasks",
	"Min tasks in a day: $minTasks",
	"Max tasks in a day: $maxTasks",
	"Average tasks per day: $avgTasks",
	"Average completed tasks per day: $avgCompletedTasks",
];


echo view("layout", [
	"title" => $title,
	"content" => view("pages/report", [
		"report" => $report,
	]),
]);
