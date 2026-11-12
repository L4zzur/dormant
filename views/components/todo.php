<?php
/**
 * @var array $todo
 * @var bool $isHistory
 */
?>

<label class="card-option">
	<input class="checkbox" type="checkbox" 
		<?= $todo["completed"] ? "checked" : "";?>
		<?= $isHistory ? "disabled" : "";?>
	>
	<span><?= escape($todo["title"]) ?></span>
</label>
