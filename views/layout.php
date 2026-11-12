<?php

/**
 * @var string $title
 * @var string $content
 * @var array $menu
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sashimi-ui@2.1.0/dist/css/default.theme.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sashimi-ui@2.1.0/dist/css/baseline.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sashimi-ui@2.1.0/dist/css/bundle.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Onest:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <main class="card app-container">
        <!-- Шапка -->
        <header class="app-header">
            <h1><?= $title; ?></h1>
        </header>

        <?= $content; ?>

        <!-- Подвал -->
        <footer class="app-footer">
            <?= view('components/menu', ['items' => $menu]); ?>
            <span class="copyright"><?= date('Y'); ?> Dormant</span>
        </footer>
    </main>

</body>
