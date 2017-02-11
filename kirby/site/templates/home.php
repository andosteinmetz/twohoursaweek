<?php snippet('header') ?>

  <main class="main" role="main">
    <a class="anchor" name="actions"></a>
    <div class="wrapper">
    <section id="actions">
      <?php 
        foreach($pages->find('actions')->children()->visible() as $action){
          snippet('action', array('data' => $action));
      }
      ?>
    </section>
    </div>

    <?php snippet('mailchimp'); ?>

    <?php snippet('google-calendar'); ?>

    <?php snippet('google-forms'); ?>

    <?php 
      $freeform = $pages->find('educate-and-act');
      if($freeform && !$freeform->isInvisible()){
        snippet('freeform', array( 'data' => $freeform) );  
      } 
    ?>

    <?php snippet('petitions-links'); ?>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>