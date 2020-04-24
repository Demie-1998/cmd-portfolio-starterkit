<?php snippet('header') ?>


<main>
  
  <div id="topcolor" >
  <div class="row align-items-center pt-5 pb-5">
    <div class="col-12 col-lg-6">
      <div id="h1"> 
      <h1><?= $page->introductiontitle() ?></h1>
      </div>
      <p id="introtekst" class="lead"><?= $page->introductiontext() ?></p>
      <a href="<?= $site->page('projects') ?>" class="btn btn-primary" role="button" aria-pressed="true">View my work</a>
      <a href="<?= $site->page('about') ?>" class="btn btn-outline-primary" role="button" aria-pressed="true">More about me</a>
    </div>
    

    <div class="col-12 col-lg-6"><div class="w3-container">

      <img src="<?= $page->image()->url(); ?>" class="img-fluid" alt="<?= $page->image()->title(); ?>" />
    </div>
</div>
  </div>
</main>
</div>

<!-- <div id="pijl"> -->
    <!-- <img id="pijlimg" src="img/Punt3.png">  -->
    
    </div>
<div class="container">
<main>
 

  <?php
  if ($projectsPage = page('projects')): ?>
  <div class="row pt-5 pb-5">
    <div class="col-12">
      <h2 class="float-left pb-4">My work</h2>
      <a class="float-right" href="<?= $site->page('projects') ?>">View all projects &#8594;</a>
    </div>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <div class="col-12 col-lg-4 mb-4">
      <div id="hovercard" class="card h-100">
      <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body"> 
      <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
          <p class="card-text"><?= $project->roles() ?></p>
          <a href="<?= $project->url() ?>">Read more &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>
    </div>
</main>


<?php snippet('footer') ?>