
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
            <div class="seal">
                <div class="col-md-12"><p>&copy; Copyright <?php echo date( 'Y' )?> <a href="#">Connect Your Leads</a></p></div>
              
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
<!--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTUh9CBBaNmVbno_LaDXlpDFnbGUg9rPA&signed_in=true&libraries=places&callback=initAutocomplete" async defer></script> -->

  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>    
<?php wp_footer(); ?>
<script type="text/javascript">
    url = "https://expressentry.melissadata.net/";
    id = "113933534";
    jQuery(document).ready(function()
      {
        $('#address, #search-services').autocomplete(
      {
        showHeader: true, 
        minLength: 4,
        delay: 400,
        source: function(request, response) 
      {
        $.getJSON(url + "jsonp/ExpressFreeForm?callback=?", {format: "jsonp", id: id, FF: request.term, maxrecords: "30"}, function (data)
      {
        // alert(JSON.stringify(data.Results));
        response($.map(data.Results, function( item )
      {

        $('ul.ui-autocomplete').click(function(){
          console.log(item);
          // $('#address').val(item.Address);
          if(item.Address.SuiteCount > 1) {
            console.log(item.Address.SuiteList);
          }        
        })

        // console.log(item.Address);
        if(item.Address.SuiteCount == 1)
          return{label: item.Address.AddressLine1 + " " + item.Address.City + " " + item.Address.SuiteName + " " + item.Address.SuiteCount + ", " + item.Address.State + " " + item.Address.PostalCode, value: item.Address.AddressLine1, addObj: item};
        else if(item.Address.SuiteCount > 1)
          return{label: item.Address.AddressLine1 + " " + item.Address.City + " (" + item.Address.SuiteList[1] + " " + "), " + item.Address.State + " " + item.Address.PostalCode, value: item.Address.AddressLine1, addObj: item};
        else
          return{label: item.Address.AddressLine1 + " " + item.Address.City + ", " + item.Address.State + " " + item.Address.PostalCode, value: item.Address.AddressLine1, addObj: item};
        }));
      });
    },
    select: function(evt, ui) 
      {
        $("#address, #search-services").blur();
        //put selection in result box
        // this.form.address.value = ui.item.label;
        // $("#address").val(ui.item.addObj.Address.PostalCode);
        var zipcode = ui.item.addObj.Address.PostalCode.split("-")[0];
        var state = ui.item.addObj.Address["CountrySubdivisionCode "].split("-")[1];
        var addressNumber = ui.item.addObj.Address.AddressLine1.substr(0,ui.item.addObj.Address.AddressLine1.indexOf(' '));
        var city = ui.item.addObj.Address.City;
        var addressStreet = ui.item.addObj.Address.AddressLine1.substr(ui.item.addObj.Address.AddressLine1.indexOf(' ')+1);
        var address = ui.item.label;
        $('#street_number').val(addressNumber);
        $('#route').val(addressStreet);
        $('#locality').val(city);
        $('#administrative_area_level_1').val(state);
        $('#postal_code').val(zipcode);
        $('#country').val('USA');
        // setTimeout(setInput(address), 1000);
        
        setCookie('cyhAddress',address,1);
        // console.log(addressNumber);
        // console.log(addressStreet);
        // console.log(state);
        // console.log(ui);
        // console.log(zipcode);
        // console.log(ui.item.value);
      }
    });
    // $("#clearbutton").click(function() 
    //  {
    //     //clear form with a reload
    //     //window.location.reload(true);
    //     //or just clear the fields
    //     this.form.address.value = '';
    //     this.form.result.value = '';
    //     //set focus
    //     $("#postalcode").focus();
    //   });
    });

    function setInput(address){
        $('#address, #search-services').val(address);
        // alert(address);
    }


    // set, get and check cookies


    function setCookie(cname,cvalue,exdays) {
        console.log('setting cookie', cname + " " +cvalue + " " +exdays)
        $('#address, #search-services').val(cvalue);
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname+"="+cvalue+"; "+expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var cyhAddress=getCookie("cyhAddress");
        if (cyhAddress != "") {
            $('#address, #search-services').val(cyhAddress);
        } else {
           // user = prompt("Please enter your name:","");
           // if (user != "" && user != null) {
           //     setCookie("username", user, 30);
           // }
        }
    }    

    checkCookie();

  </script>


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