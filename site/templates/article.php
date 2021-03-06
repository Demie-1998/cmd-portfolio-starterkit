<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="pt-5 pb-5">
<section class="content article">
  <article>
    <?php snippet('intro') ?>
    
    <?= $page->text()->blocks()->html() ?>
    <a href="<?= url('articles') ?>">&#8592; Back</a>
  </article>
</section>
</main>

<?php
  if ($blogPage = page('articles')): ?>
  <div class="row border-top pt-5 pb-5">
    <div class="col-12">
      <h2 class="float-left pb-4">View more Creative dumps</h2>
      <a class="float-right" href="<?= url('articles') ?>">View all Creative dumps &#8594;</a>
    </div>
    <?php foreach ($blogPage->children()->listed()->paginate(3) as $article): ?>
    <div class="col-12 col-lg-4 mb-4">
      <div class="card h-100">
      <img src="<?= $article->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h4>
        <p class="card-text"><?= $article->roles() ?></p>
        <a href="<?= $article->url() ?>">Read more &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>

<?php snippet('footer') ?>