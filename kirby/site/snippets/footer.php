  <footer class="footer cf clearfix" role="contentinfo">
    <div class="wrapper wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <div class="social-links">
        <a href="https://www.facebook.com/2hoursaweek/?fref=ts" target="_blank"><img src="/assets/images/dark-facebook-96.png"></a>
        <a href="https://twitter.com/2hoursaweek/" target="_blank"><img src="/assets/images/dark-twitter-96.png"></a>
        <a href="mailto:twohoursaweek@gmail.com"><img src="/assets/images/dark-forwardtofriend-96.png"></a>
        <a href="/about" class="footer-link">About</a>
        <?php echo snippet('donate-button'); ?>
      </div>

    </div>
  </footer>
  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js"></script>
  <script type="text/javascript" src="https://cdnjs.com/libraries/slick-carousel"></script>-->
  <script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="/assets/js/slick-1.6.0/slick/slick.min.js"></script>
  <script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>