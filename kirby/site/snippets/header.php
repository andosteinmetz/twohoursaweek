<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <script src="https://use.fontawesome.com/83f791c53c.js"></script>
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="/assets/js/slick-1.6.0/slick/slick.css"/>
  <!--<link rel="stylesheet" type="text/css" href="/assets/css/forms.css">-->
  <title><?php echo $site->title(); ?> | <?= $page->title()->html(); ?></title>
  <meta name="description" content="<?php echo $site->description(); ?>">

</head>
<body>

  <header class="wrapper">
    <div class="social-links">
        <a href="https://www.facebook.com/2hoursaweek/?fref=ts" target="_blank"><img src="/assets/images/dark-facebook-96.png"></a>
        <a href="https://twitter.com/2hoursaweek/" target="_blank"><img src="/assets/images/dark-twitter-96.png"></a>
        <a href="mailto:twohoursaweek@gmail.com"><img src="/assets/images/dark-forwardtofriend-96.png"></a>
        <a href="/about" class="footer-link">About</a>
        <?php echo snippet('donate-button'); ?>
    </div>
    <h1><a href="/"><?php echo $site->title(); ?></a></h1>
    <p class="intro"><?php echo $site->description(); ?></p>
  </header>