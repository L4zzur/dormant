<?php

function undoneCommand(array $arguments): void
{
	$todos = requireTodos();

	$now = time();
	$todos = updateTodos($todos, $arguments, function ($todo) use ($now) {
		return array_merge($todo, [
			"completed" => false,
			"updated_at" => $now,
			"completed_at" => null,
		]);
	});

	saveTodos($todos);
}
