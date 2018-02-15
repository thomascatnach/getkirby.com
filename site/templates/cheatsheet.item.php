<?php snippet('header') ?>

  <main class="main" role="main">

    <?php if(!$page->call()->isEmpty()): ?>
    <h1 class="alpha"><?php echo $page->call()->html() ?></h1>
    <?php else: ?>
    <h1 class="alpha"><?php echo $page->title()->html() ?></h1>
    <?php endif ?>

    <div class="zeta subtitle margin-bottom"><?php echo $page->excerpt()->kt() ?></div>

    <section class="text col-4-6">

      <?php snippet('upcoming') ?>

      <?php if(!$page->params()->isEmpty() or !$page->return()->isEmpty()): ?>
      <?php $params = $page->params()->yaml() ?>
      <?php $return = $page->return()->yaml() ?>
      <ul>
        <?php if($page->since()->isNotEmpty()): ?>
        <li>
          <strong>since:</strong>
          <?php echo $page->since()->version('Kirby %s') ?>
        </li>
        <?php endif ?>
        <?php foreach($params as $param): ?>
        <li>
          <strong><?php echo $param['name'] ?></strong> (<?php echo $param['type'] ?>)<br />
          <em><?php echo $param['text'] ?></em>
        </li>
        <?php endforeach ?>
        <?php if(!empty($return)): ?>
        <li>
          <strong>return </strong> (<?php echo $return['type'] ?>)<br />
          <?php if(isset($return['text'])): ?>
          <em><?php echo $return['text'] ?></em>
          <?php endif ?>
        </li>
        <?php endif ?>
      </ul>
      <?php endif ?>

      <?php if($page->hasInheritingParent() && $page->inheritingParent()->extendingMode() == 'inherits'): ?>
      <p class="zeta">This documentation entry is inherited from the <a href="<?php echo $page->parent()->url() ?>"><?php echo ($class = $page->parent()->class())? $class : $page->parent()->title() ?> class</a>.</p>
      <?php endif ?>

      <?php echo str_replace('(\\', '(', $page->text()->kt()) ?>

      <?php if($page->image()): ?>
      <h2 class="beta">Result</h2>
      <figure>
        <?php foreach($page->images() as $image): ?>
        <img src="<?php echo $image->url() ?>" alt="Screenshot <?php echo $page->title() ?>">
        <?php endforeach ?>
      </figure>
      <?php endif ?>

      <hr>

      <div class="subtitle">
        Is something missing or incorrect? <a href="https://github.com/getkirby/getkirby.com/edit/master/content/<?= $page->diruri() ?>/<?= $page->intendedTemplate() ?>.txt">Edit this page on Github…</a>
      </div>

    </section>

    <nav class="sidebar col-2-6 last">
      <?php $overviewPage = $page->inheritingParent()->parent(); ?>
      <ul>
        <li><a href="<?php echo $overviewPage->url() ?>"><small>&uarr;</small><?php echo $overviewPage->title() ?> overview</a></li>

        <?php if($prev = $page->prevVisible()): ?>
        <li><a href="<?php echo $prev->url($page->inheritingParent()) ?>"><small>&larr;</small> <?php echo html($prev->title()) ?></a></li>
        <?php endif ?>

        <?php if($next = $page->nextVisible()): ?>
        <li><a href="<?php echo $next->url($page->inheritingParent()) ?>"><small>&rarr;</small> <?php echo html($next->title()) ?></a></li>
        <?php endif ?>

        <li><a href="<?php echo $overviewPage->url() ?>#<?php echo $page->inheritingParent()->uid() ?>"><small>&darr;</small>Back to <?php echo $overviewPage->title() ?> section</a></li>
      </ul>
    </nav>


  </main>

<?php snippet('footer') ?>
