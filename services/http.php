<?php

function redirect(string $url): never
{
	header("location: $url");
	exit();
}
