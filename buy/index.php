<?php
$world = 'buy';
$page_title = 'Buying a home abroad · holidayhomes.lu';
$page_description = 'Guidance from Luxembourg for buying a home in Spain, Italy or France, with trusted partners on the ground.';
require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
$prompts = [
    'What documents do I need to buy in Spain?',
    'What does buying cost on top of the price?',
    'Can I get a mortgage for a home in Italy?',
];
?>
<main>
  <section class="hero wrap">
    <p class="eyebrow">Buying abroad</p>
    <h1 class="display">Where would you like to wake&nbsp;up?</h1>
    <p class="lead">We guide you from Luxembourg, with partners we trust on the ground. From the first question to the keys.</p>
    <a class="btn" href="#ask">Ask us anything</a>
  </section>

  <nav class="trio" aria-label="Countries">
    <div class="wrap trio-grid">
      <?php foreach (SITE['countries'] as $country): ?>
        <a class="trio-item" href="#">
          <p class="trio-title"><?= e($country) ?></p>
          <p class="label">The buying guide</p>
        </a>
      <?php endforeach; ?>
    </div>
  </nav>

  <div class="photo photo-wide"><span class="photo-note">Photo · morning light, sea or mountains</span></div>

  <section id="ask" class="section wrap">
    <h2 class="h2-xl">Ask anything.</h2>
    <form class="ask-form" action="#" onsubmit="return false">
      <label for="askq" class="visually-hidden">Your question</label>
      <input id="askq" name="q" type="text" placeholder="Your question" autocomplete="off">
      <button type="button" class="icon-btn" aria-label="Ask by voice">
        <svg width="18" height="18" viewBox="0 0 18 18" aria-hidden="true"><rect x="6" y="1.5" width="6" height="10" rx="3" fill="none" stroke="currentColor" stroke-width="1.3"/><path d="M3 9a6 6 0 0 0 12 0M9 15v2" fill="none" stroke="currentColor" stroke-width="1.3"/></svg>
      </button>
      <button type="submit" class="icon-btn solid" aria-label="Ask">
        <svg width="18" height="12" viewBox="0 0 18 12" aria-hidden="true"><path d="M0 6h16M11 1l5 5-5 5" fill="none" stroke="currentColor" stroke-width="1.4"/></svg>
      </button>
    </form>
    <div class="prompts">
      <?php foreach ($prompts as $p): ?>
        <button type="button" class="prompt" data-q="<?= e($p) ?>"><?= e($p) ?></button>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="band-soft">
    <div class="section wrap">
      <h2 class="h2">Four steps. We walk them with you.</h2>
      <div class="steps">
        <div class="step"><p class="step-title">We listen</p><p class="step-text">What the home should be, and why.</p></div>
        <div class="step"><p class="step-title">We prepare you</p><p class="step-text">Documents, costs and steps in that country.</p></div>
        <div class="step"><p class="step-title">We introduce you</p><p class="step-text">To a partner on the ground we trust.</p></div>
        <div class="step"><p class="step-title">We stay with you</p><p class="step-text">Until the keys are in your hand.</p></div>
      </div>
    </div>
  </section>

  <section class="section wrap">
    <h2 class="h2">The kind of homes we help with.</h2>
    <div class="gallery">
      <figure>
        <div class="photo photo-card"><span class="photo-note">Photo</span></div>
        <figcaption>Above the sea · Spain</figcaption>
      </figure>
      <figure>
        <div class="photo photo-card" style="background:#C9B9C6"><span class="photo-note">Photo</span></div>
        <figcaption>A quiet courtyard · Morocco</figcaption>
      </figure>
    </div>
  </section>
</main>
<script>
  document.querySelectorAll('.prompt').forEach(function (b) {
    b.addEventListener('click', function () {
      var i = document.getElementById('askq');
      i.value = b.dataset.q;
      i.focus();
    });
  });
</script>
<?php require __DIR__ . '/../includes/footer.php'; ?>
