<?php


function removeCommand(array $arguments): void
{
	$todos = requireTodos();
	$todos = updateTodos($todos, $arguments, fn ($todo) => null);
	saveTodos($todos);
}
