<?php
/**
 * @var array $items
 */

$currentPage = $_SERVER['REQUEST_URI'];
?>

<nav class="app-nav">
    <?php foreach ($items as $item): ?>
        <?php $isActive = ($item['url'] === $currentPage); ?>
        <a 
            href="<?= escape($item['url']); ?>" 
            class="chip <?= $isActive ? 'active' : ''; ?>"
        >
            <?= escape($item['text']); ?>
        </a>
    <?php endforeach; ?>
</nav>
