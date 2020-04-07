<?php snippet('header') ?>
<img src="<?= $site->url() ?>/img/foto1.jpg">
<main class="pt-5 pb-5">
  <div class="row">
    <div class="col-12 col-lg-9"> 
      <?php snippet('intro') ?>
      <?= $page->text()->blocks()->html() ?>
    </div>
    <div class="col-12 col-lg-3">
      <h2>Resume</h2>
      <a href="<?= $page->files()->template('document') ?>" target="_blank">Download resumé</a>
    </div>
  </div>
</main>

<?php snippet('footer') ?>
