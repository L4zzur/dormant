<?php

require_once __DIR__ . "/../config.php";


if ($_SERVER["REQUEST_METHOD"] === "POST")
{
	$todoTitle = trim($_POST["title"]);
	$todo = createTodo($todoTitle);
	addTodo($todo);

	header("location: /");
}

$title = "Dormant";
$time = null;
$isHistory = false;

if (isset($_GET["date"]))
{
	$time = strtotime($_GET["date"]);
	if ($time === false)
	{
		$time = time();
	}

	$today = date("Y-m-d");
	if ($today !== date(date("Y-m-d", $time)))
	{
		$isHistory = true;
		$title = sprintf("Dormant // %s", date("j M", $time));
	}
}



echo view("layout", [
	"title" => $title,
	"content" => view("pages/index", [
		"todos" => getTodos($time),
		"isHistory" => $isHistory,
	]),
]);
