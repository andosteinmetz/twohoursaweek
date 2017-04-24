<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5ZKSFNQ');</script>
  <!-- End Google Tag Manager -->

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
   <meta name="description" content="http://www/.2hoursaweek.org" />
    <meta name="keywords" content="We are fostering a new level of civic engagement following the 2016 election by offering you 2 hours a week of tangible action." />

    <meta name="author" content="2hoursaweek.org" />
    <meta name="application-name" content="http://www/2hoursaweek.org" />

    <!-- for Facebook -->
    <meta property="og:title" content="2 hours a week" />
    <?php if($page->intendedTemplate() == 'action' && $page->hasImages()): ?>
      <meta property="og:image" content="<?php echo $page->image()->url(); ?>">
      <meta property="og:image:width" content="960" />
    <?php endif; ?>
    <meta property="og:image" content="http://www.2hoursaweek.org/assets/images/2.png" />
    <meta property="og:url" content="<?php echo $page->url(); ?>" />
    <meta property="og:description" content="We are fostering a new level of civic engagement following the 2016 election by offering you 2 hours a week of tangible action." />

    <!-- for Twitter -->
    <meta name="twitter:card" content="2 hours a week" />
    <meta name="twitter:title" content="2 hours a week" />
    <meta name="twitter:description" content="We are fostering a new level of civic engagement following the 2016 election by offering you 2 hours a week of tangible action." />
    <meta name="twitter:image" content="/assets/images/2.png" />
  <script src="https://use.fontawesome.com/83f791c53c.js"></script>
  <link rel="stylesheet" href="/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="/assets/js/slick-1.6.0/slick/slick.css"/>
  <!--<link rel="stylesheet" type="text/css" href="/assets/css/forms.css">-->
  <link rel="icon" type="image/png" href="/assets/images/favicon.ico">
  <title><?php echo $site->title(); ?> | <?= $page->title()->html(); ?></title>
  <meta name="description" content="<?php echo $site->description(); ?>">

</head>
<body<?php if ( $page->isHomePage() ){ echo ' class="home"'; }?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZKSFNQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <header class="wrapper">
    <div class="social-links">
        <a href="https://www.facebook.com/2hoursaweek/?fref=ts" target="_blank"><img src="/assets/images/dark-facebook-96.png"></a>
        <a href="https://twitter.com/2hoursaweek/" target="_blank"><img src="/assets/images/dark-twitter-96.png"></a>
        <a href="mailto:twohoursaweek@gmail.com"><img src="/assets/images/dark-forwardtofriend-96.png"></a>
        <a href="/about" class="footer-link">About</a>
        <?php echo snippet('donate-button'); ?>
    </div>
    <h1><a href="/"><?php echo $site->title(); ?></a></h1>
    <p class="intro"><?php if ($page->isHomePage()) { echo $site->description(); } ?></p>
  </header>
