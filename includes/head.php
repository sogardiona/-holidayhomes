<?php
// Expects: $page_title, $page_description, $world ('gate' | 'buy' | 'sell')
require_once __DIR__ . '/config.php';
$css_version = @filemtime(__DIR__ . '/../assets/css/site.css') ?: 1;
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_description) ?>">
<?php if (SITE['noindex']): ?><meta name="robots" content="noindex, nofollow">
<?php endif; ?>
<meta name="theme-color" content="<?= $world === 'sell' ? '#4A1F4F' : '#F6F1E7' ?>">
<link rel="preload" href="/assets/fonts/cormorant-300.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="/assets/fonts/inter-300.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/css/site.css?v=<?= $css_version ?>">
</head>
<body class="world-<?= e($world) ?>">
