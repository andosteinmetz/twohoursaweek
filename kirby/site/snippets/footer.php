  <footer class="footer cf clearfix" role="contentinfo">
    <div class="wrapper wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>
    </div>
  </footer>
  <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/core.js"></script>
  <script type="text/javascript" src="https://cdnjs.com/libraries/slick-carousel"></script>-->
  <script src="https://widget.battleforthenet.com/widget.js" async></script>
  <script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="/assets/js/slick-1.6.0/slick/slick.min.js"></script>
  <script type="text/javascript" src="/assets/js/main.js"></script>
</body>
</html>