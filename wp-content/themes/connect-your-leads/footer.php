
         </div>
         </div>
    <!-- container -->

        <footer>
            <div class="border-styler"></div>
            <div class="container">
            <div class="row terms">
                <div class="col-md-3 pull-right">
                    <!-- <a href="#">Terms &amp; Conditions</a> -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row foot-links">
                <div class="col-sm-4">
                    <?php the_field('footer_column_1', 'option'); ?>
                </div>
                <div class="col-sm-4">
                    <?php the_field('footer_column_2', 'option'); ?>
                </div>
                <div class="col-sm-4">
                    <?php the_field('footer_column_3', 'option'); ?>
                </div>
            </div>
            <!-- /.row foot-links -->
            <div class="row copy">
            <div class="seal">
                <div class="col-md-12"><p>&copy; Copyright <?php echo date( 'Y' )?> <a href="#">Connect Your Leads</a></p></div>
              
            </div>
            </div>
        </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/fastclick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/jvfloat.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/javascripts/main.js"></script>
<!--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTUh9CBBaNmVbno_LaDXlpDFnbGUg9rPA&signed_in=true&libraries=places&callback=initAutocomplete" async defer></script> -->

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";
s.defer=true;s.src="https://salesiq.zoho.com/connectyourhome1/float.ls?embedname=connectyourhome";
t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
</script>
<!-- End of LiveChat code -->

<script type="text/javascript">
var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";
s.defer=true;s.src="https://salesiq.zoho.com/connectyourhome1/float.ls?embedname=connectyourhome";
t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
$zoho.salesiq.ready=function(embedinfo){$zoho.salesiq.floatbutton.visible("hide");}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-18407193-3', 'auto');
  ga('send', 'pageview');
</script>
  <!-- <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>     -->
<?php wp_footer(); ?>

</body>
</html>