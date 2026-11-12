<?php
$world = 'sell';
$page_title = 'Selling your home abroad · holidayhomes.lu';
$page_description = 'One listing, presented to buyers in Luxembourg, across the eXp network and in the country where your home stands.';
require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<main>
  <section class="hero wrap">
    <p class="eyebrow">For owners of a home abroad</p>
    <h1 class="display">Your home abroad deserves more than one market.</h1>
    <p class="lead">We present it to buyers in Luxembourg, across the eXp network, and in the country where it stands. One listing, handled from here.</p>
    <a class="btn" href="#request">Tell us about your home</a>
  </section>

  <section class="trio" aria-label="Where your home is presented">
    <div class="wrap trio-grid">
      <div class="trio-item">
        <p class="label trio-num">01</p>
        <p class="trio-title">Luxembourg</p>
        <p class="trio-text">Buyers who live here, and who rarely see homes abroad presented properly.</p>
      </div>
      <div class="trio-item">
        <p class="label trio-num">02</p>
        <p class="trio-title">The eXp network</p>
        <p class="trio-text">Shared across eXp's international websites.</p>
      </div>
      <div class="trio-item">
        <p class="label trio-num">03</p>
        <p class="trio-title">Its own country</p>
        <p class="trio-text">Advertised locally through a trusted partner where your home stands.</p>
      </div>
    </div>
  </section>

  <div class="photo photo-wide"><span class="photo-note">Photo · dusk on a terrace</span></div>

  <section class="section wrap">
    <h2 class="h2">Four steps. We carry them.</h2>
    <div class="steps">
      <div class="step"><p class="step-title">You tell us about it</p><p class="step-text">A few details. Nothing more to start.</p></div>
      <div class="step"><p class="step-title"><?= e(SITE['contact']) ?> calls you</p><p class="step-text">To understand your plans and your timing.</p></div>
      <div class="step"><p class="step-title">Your home is prepared</p><p class="step-text">Photography and details worthy of it.</p></div>
      <div class="step"><p class="step-title">It goes live, three times</p><p class="step-text">Luxembourg, the eXp network, its own country.</p></div>
    </div>
  </section>

  <section id="request" class="band-deep">
    <div class="section wrap request">
      <div class="request-intro">
        <h2 class="h2-xl">Tell us about your home.</h2>
        <p class="lead"><?= e(SITE['contact']) ?> will call you personally. Nothing is published without your approval.</p>
      </div>
      <form class="request-form" action="#" method="post" onsubmit="return false">
        <div class="field">
          <label class="label" for="country">Country</label>
          <select id="country" name="country">
            <?php foreach (SITE['countries'] as $c): ?><option><?= e($c) ?></option><?php endforeach; ?>
            <option>Elsewhere</option>
          </select>
        </div>
        <div class="field">
          <label class="label" for="kind">Type of home</label>
          <select id="kind" name="kind">
            <option>Apartment</option><option>Villa</option><option>House</option><option>Chalet</option>
          </select>
        </div>
        <div class="field full">
          <label class="label" for="where">Where, roughly</label>
          <input id="where" name="where" type="text" placeholder="Town or region">
        </div>
        <div class="field">
          <label class="label" for="name">Your name</label>
          <input id="name" name="name" type="text" autocomplete="name">
        </div>
        <div class="field">
          <label class="label" for="reach">Phone or email</label>
          <input id="reach" name="reach" type="text" autocomplete="email">
        </div>
        <div class="field full">
          <button class="btn" type="submit">Request a call</button>
        </div>
      </form>
    </div>
  </section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
