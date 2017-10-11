<?php snippet('header') ?>

<style>

.main ul {
  margin: 0;
}
.box {
  list-style: none;
  border: 1px solid #ddd;
  margin-bottom: 1.5rem;
  padding: 1.5rem;
  border-radius: 3px;
}
.box *:last-child {
  margin-bottom: 0;
}
.box .btn {
  font-weight: 600;
  background: #000;
  color: #fff;
}

.intro {
  font-size: 1.25em;
  padding: 0;
}

</style>

<main class="main text" role="main">

  <h1 class="alpha"><?php echo $page->title() ?></h1>
  <div class="intro">
    <?php echo kirbytext($page->intro()) ?>
  </div>

  <div class="grid section">
    <div class="col-3-6">
      <?php echo kirbytext($page->text()) ?>
    </div>
    <div class="col-3-6">
      <h2>Buy a support package</h2>

      <ul>
        <li class="box">
          <p>
            <strong>Kirby 3 Fellowship Package</strong><br>
            Follow the process behind Kirby 3 with all updates, coding sessions and more. This package does not include any Kirby 2 or 3 license.
          </p>
          <p>
            <a href="http://sites.fastspring.com/openwe/product/kirby-3-fellowship-package" class="btn">€ <?= c::get('price.next.fellowship') ?> &rarr;</a>
          </p>
        </li>
        <li class="box">
          <p>
            <strong>Kirby 3 Pro Upgrade + Fellowship Package</strong><br>
            Upgrade your existing Kirby 2 Pro license to a Kirby 3 Pro license before Kirby 3 even exists and follow us along the way.
          </p>
          <p>
            <a href="http://sites.fastspring.com/openwe/product/kirby-3-upgrade-package" class="btn">€ <?= c::get('price.next.upgrade') ?> &rarr;</a>
          </p>
        </li>
        <li class="box">
          <p>
            <strong>Kirby 3 Pro License + Fellowship Package</strong><br>
            Be among the first to buy a Kirby 3 Pro License and follow the process how we build it for you!
          </p>
          <p>
            You can use this license for a Kirby 2 Pro project in the meantime and we guarantee you a
            free upgrade to Kirby 3 Pro once it has been launched.
          </p>
          <p>
            <small><i>Kirby 3 will be a paid upgrade for Kirby 2 license holders.</i></small>
          </p>
          <p>
            <a href="http://sites.fastspring.com/openwe/product/kirby-3-license-package" class="btn">€ <?= c::get('price.next.pro') ?> &rarr;</a>
          </p>
        </li>
      </ul>
      <p>
        The prices for our supporter packages don't include VAT. They are one-time purchases. No monthly fees or other hidden costs, no matter how long it takes us to finish the release.
      </p>
    </div>
  </div>

</main>

<?php snippet('footer') ?>
