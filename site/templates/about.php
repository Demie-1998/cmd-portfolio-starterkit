<?php snippet('header') ?>

<main class="pt-3 pb-5">
  <div class="row pb-4">
  <div class="col-12">
  <img src="<?= $site->url() ?>/img/foto1.jpg" class="align-left medium"/>
</div>
</div>
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
