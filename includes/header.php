<?php
// Expects: $world ('buy' | 'sell')
$other = $world === 'buy'
    ? ['href' => '/sell/', 'label' => 'Selling instead?']
    : ['href' => '/buy/',  'label' => 'Buying instead?'];
?>
<header class="site-header wrap">
  <a class="wordmark" href="/"><?= e(SITE['name']) ?></a>
  <a class="switch" href="<?= $other['href'] ?>"><?= e($other['label']) ?></a>
</header>
