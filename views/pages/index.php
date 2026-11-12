<?php

/**
 * @var array $todos
 * @var bool $isHistory
 * @var array $errors
 */

?>

<?php if (!empty($errors)): ?>
    <div class="callout destructive">
        <?php foreach ($errors as $error): ?>
            <p><?= escape($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php if (empty($todos)): ?>
    <div class="callout info">
        <p>Nothing to see here!</p>
    </div>
<?php else: ?>
    <section class="todo-list">
        <?php foreach ($todos as $todo):?>
            <?= view("components/todo", ["todo" => $todo, "isHistory" => $isHistory]) ?>
        <?php endforeach;?>
    </section>
<?php endif; ?>


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
