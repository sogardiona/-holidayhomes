<?php
$world = 'gate';
$page_title = 'holidayhomes.lu · The home for your home abroad';
$page_description = 'For people in Luxembourg buying a home abroad, or selling the one they already own.';
require __DIR__ . '/includes/head.php';
?>
<main class="gate">
  <a class="gate-side gate-buy" href="/buy/">
    <span class="gate-mark"><?= e(SITE['name']) ?></span>
    <span class="gate-line">The home for</span>
    <span class="gate-cta">
      <span class="label">I am looking</span>
      <span class="gate-go">Find yours</span>
    </span>
  </a>
  <a class="gate-side gate-sell" href="/sell/">
    <span class="gate-place label"><?= e(SITE['place']) ?></span>
    <span class="gate-line">your home abroad</span>
    <span class="gate-cta">
      <span class="label">I own one</span>
      <span class="gate-go">Get its best value</span>
    </span>
  </a>
</main>
</body>
</html>
