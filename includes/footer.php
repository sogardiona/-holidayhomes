<footer class="site-footer">
  <div class="wrap footer-row">
    <a class="wordmark small" href="/"><?= e(SITE['name']) ?></a>
    <?php if ($world === 'buy'): ?>
      <a class="link-italic" href="<?= e(SITE['contact_url']) ?>">Talk to <?= e(SITE['contact']) ?></a>
    <?php else: ?>
      <span><?= e(SITE['place']) ?></span>
    <?php endif; ?>
  </div>
</footer>
</body>
</html>
