<?php

/**
 * @var array $todos
 * @var bool $isHistory
 */

?>

<section class="todo-list">
    <?php foreach ($todos as $todo):?>
        <?= view("components/todo", ["todo" => $todo, "isHistory" => $isHistory]) ?>
    <?php endforeach;?>
</section>

<?php if (!$isHistory):?>
<form action="/" method="POST" class="add-todo">
    <input
        class="input"
        type="text" 
        name="title" 
        placeholder="What to do?" 
        required 
        autocomplete="off"
    >
    <button type="submit" class="button">Add</button>
</form>
<?php endif; ?>

<a class="button secondary" href="/report.php">View report</a>
