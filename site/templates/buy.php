<?php if(c::get('stage')) go('http://getkirby.com/buy') ?>
<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 class="alpha">Store</h1>
    <h2 class="beta margin-bottom"><?php echo $page->subtitle()->html() ?></h2>

    <div class="grid section">
      <div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><a href="https://sites.fastspring.com/openwe/instant/kirby2-personal">Personal license</a></h3>
          <h4><a href="https://sites.fastspring.com/openwe/instant/kirby2-personal">€15 / $19</a> <small>(excluding VAT)</small></h4>
          <?php echo $page->personal()->kirbytext() ?>
        </div>
        <a href="https://sites.fastspring.com/openwe/instant/kirby2-personal" class="btn">Buy now &rarr;</a>

      </div><!--
   --><div class="col-3-6 buy-section">
        <div class="text">
          <h3 class="gamma"><a href="https://sites.fastspring.com/openwe/instant/kirby2-commercial">Pro license</a></h3>
          <h4><a href="https://sites.fastspring.com/openwe/instant/kirby2-commercial">€79 / $99</a> <small>(excluding VAT)</small></h4>
          <?php echo $page->commercial()->kirbytext() ?>
        </div>
        <a href="https://sites.fastspring.com/openwe/instant/kirby2-commercial" class="btn">Buy now &rarr;</a>
      </div>
    </div>

    <div class="section last">
      <div class="grid">
        <div class="col-3-6">
          <h2 class="beta">Free upgrade from Kirby 1</h2>
          <div class="text">
            <p>
              <strong>Owners of a Kirby 1 license can upgrade to a Kirby 2 Pro license for free! Your Kirby 1 license key is still valid.</strong>
            </p>
            <p>
              Please follow the <a href="/docs/installation/upgrade">upgrade guide</a> for your Kirby 1 installation.
            </p>
          </div>
        </div>
        <div class="col-3-6 last">
          <h2 class="beta">Voluntary upgrade packages</h2>
          <div class="text">
            <p>
              We've got the most amazing users and some of them asked us to provide a way to pay for an upgrade nonetheless. We made this possible with a set of voluntary Kirby 1 upgrade packages.
            </p>
            <ul class="upgrade-list">
              <li><a href="">The <i>I'm a Kirby Addict</i> upgrade <small>€29 / $36</small></a></li>
              <li><a href="">The <i>I love Kirby</i> upgrade <small>€19 / $24</small></a></li>
              <li><a href="">The <i>I really like Kirby</i> upgrade <small>€9 / $12</small></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </main>

<?php snippet('footer') ?>
