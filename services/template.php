<?php

function view(string $path, array $vars = []): string
{
	if (!preg_match("/[0-9A-Za-z\/_-]+$/", $path))
	{
		throw new Exception("Invalid template path");
	}

	$absPath = ROOT . "/views/$path.php";

	if (!file_exists($absPath))
	{
		throw new Exception("Template not found");

	}

	extract($vars);

	ob_start();
	require $absPath;

	return ob_get_clean();
}

function escape(string $value): string
{
	return htmlspecialchars($value, ENT_QUOTES);
}
