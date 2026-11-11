<?php

function doneCommand(array $arguments): void
{
	$todos = requireTodos();

	$now = time();
	$todos = updateTodos($todos, $arguments, function ($todo) use ($now) {
		return array_merge($todo, [
			"completed" => true,
			"updated_at" => $now,
			"completed_at" => $now,
		]);
	});

	saveTodos($todos);
}
