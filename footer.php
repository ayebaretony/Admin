 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Kola Studios
              <a href="<?php bloginfo('template_directory');?>/index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>

      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php bloginfo('template_directory');?>/assets/js/sparkline-chart.js"></script>    
    <script src="<?php bloginfo('template_directory');?>/assets/js/zabuto_calendar.js"></script>    
    
    <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to WoundMetrics!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '<?php bloginfo('template_directory');?>/assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });

        <?php wp_footer(); ?>
    </script>