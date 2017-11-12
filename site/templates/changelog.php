<?php snippet('header') ?>

<main class="main" role="main">

  <?php $articles = $page->children()->visible()->sortBy('date', 'desc', 'title', 'desc')->paginate(20) ?>

  <h1 class="vh">Changelog</h1>

  <ul class="article-list">

    <?php foreach($articles as $article): ?>
    <li>
      <h2 class="alpha"><a href="<?php echo $article->url() ?>"><?php echo $article->title() ?></a></h2>
      <time class="article-date" datetime="<?php echo $page->date('c') ?>">
        <span class="month"><?php echo $article->date('M d') ?></span>
        <span class="year"><?php echo $article->date('Y') ?></span>
      </time>
    </li>
    <?php endforeach ?>

  </ul>

  <?php if($articles->pagination()->hasPages()): /*** pagination ***/ ?>
  <nav class="pagination cf">
    <?php if($articles->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">&larr; newer posts</a>
    <?php endif ?>
    <?php if($articles->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">older posts &rarr;</a>
    <?php endif ?>
  </nav>
  <?php endif ?>

</main>

<?php snippet('footer') ?>