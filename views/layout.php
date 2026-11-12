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
            <a href="/" class="logo-link" title="На главную">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <!-- Башня маяка -->
                    <path d="M9 21h6" />
                    <path d="M10 9l-1 12" />
                    <path d="M14 9l1 12" />
                    <path d="M9 9h6" />
                    <path d="M10 5h4" />
                    <path d="M10 9V5" />
                    <path d="M14 9V5" />
                    <path d="M11 2h2" />
                    <!-- Лучи света -->
                    <path d="M3 8l3 1" />
                    <path d="M21 8l-3 1" />
                    <path d="M4 12l2-0.5" />
                    <path d="M20 12l-2-0.5" />
                </svg>
            </a>
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
