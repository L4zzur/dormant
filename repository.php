<?php

function getFilePath(?int $time): string
{
	$time = $time ?? time();

	$fileName = date("Y-m-d", $time) . ".txt";
	$filePath = ROOT . "/data/" . $fileName;
	return $filePath;
}

function getTodos(?int $time = null): array
{
	$filePath = getFilePath($time);

	if (!file_exists($filePath))
	{
		return [];
	}

	$content = file_get_contents($filePath);
	$todos = unserialize($content, ["allowed_classes" => false]);
	return is_array($todos) ? $todos : [];
}

function requireTodos(?int $time = null): array
{
	$todos = getTodos($time);

	if (empty($todos))
	{
		echo "Nothing to do here\n";
		exit();
	}

	return $todos;
}

function addTodo(array $todo, ?int $time = null)
{
	$todos = getTodos($time);
	$todos[] = $todo;
	saveTodos($todos);
}

function saveTodos(array $todos, ?int $time = null): void
{
	$filePath = getFilePath($time);
	file_put_contents($filePath, serialize($todos));
}
