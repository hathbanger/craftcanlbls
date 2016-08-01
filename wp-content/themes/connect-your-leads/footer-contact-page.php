
        <footer>
            <div class="row terms">
                <div class="col-md-3 pull-right">
                    <!-- <a href="#">Terms &amp; Conditions</a> -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row foot-links">
                <div class="col-sm-3">
                   <?php the_field('footer_column_1', 'option'); ?>
                </div>
                <!-- /.col-md3 -->
                <div class="col-sm-3">
                    <?php the_field('footer_column_2', 'option'); ?>
                </div>
                <!-- /.col-md3 -->
                <div class="col-sm-3">
                    <?php the_field('footer_column_3', 'option'); ?>
                </div>
                <!-- /.col-md3 -->
                <div class="col-sm-3">
                    <?php the_field('footer_column_4', 'option'); ?>
                </div>
                <!-- /.col-md3 -->
            </div>
            <!-- /.row foot-links -->
            <div class="row copy">

                <a href="http://www.bbb.org/denver/business-reviews/cable-tv-internet-and-telephone-installation-service/connect-your-home-llc-in-denver-co-90165080/#bbbonlineclick" target="_blank" rel="nofollow"><img src="http://seal-denver.bbb.org/seals/blue-seal-293-61-bbb-90165080.png" style="border: 0; max-width: 200px;" alt="Connect Your Home, LLC BBB Business Review" /></a>

                <div class="col-md-12"><p>&copy; Copyright <?php echo date( 'Y' )?> <a href="#">Connect Your Home</a></p></div>
            </div>
        </footer>

         </div>
    <!-- container -->

        <form method="post" action="/results" id="search-form">
            <input id="street_number" type="hidden" name="street" />
            <input id="route" type="hidden" name="route" />
            <input id="locality" type="hidden" name="locality" />
            <input id="administrative_area_level_1" type="hidden" name="administrative_area_level_1" />
            <input id="postal_code" type="hidden" name="zip" />
            <input id="country" type="hidden" name="country" />
        </form>
<?php include 'page-templates/modal-form.php' ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/fastclick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jvfloat.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTUh9CBBaNmVbno_LaDXlpDFnbGUg9rPA&signed_in=true&libraries=places&callback=initAutocomplete" async defer></script>

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18407193-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>