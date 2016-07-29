<?php
/**
 * Template Name: Results
 *
 * @package WordPress
 * @subpackage cyh
  * 
 */

include './library/Cal.php';
include './library/GetBrowser.php';

?>


<?php


// now try it
$ua=getBrowser();
$yourbrowser= $ua['name'] . " " . $ua['version'];

$machine = $ua['platform'];
// print_r($yourbrowser);

$ref = @$_SERVER[HTTP_REFERER];

// echo "Referrer of this page  = $ref ";

$resultcount = sizeof($oXML->provider);

?>




<?php
// $servername = "127.0.0.1";
$servername = "10.144.140.18";
$username = "deploy";
$password = "C0nnectY0urHome@T4r33";
$dbname = "visitor_tracking";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO visitors (street, city, state, zipcode, browser, machine, offercount)
    VALUES ('$street', '$city', '$state', '$zip', '$yourbrowser', '$machine', '$resultcount')";
    // use exec() because no results are returned
    $conn->exec($sql);
    // echo "New record created successfully";
      $success = "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>



<?php get_header(); ?>
<div class="results-page">
<section class="results-header">
    <div class="row top-info">
        <div class="col-md-6">
            <div class="breadcrumbs">
                <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs();
                    // echo $success;
                    // echo '<br/>';
                    // echo $yourbrowser;
                    // echo '<br/>';
                    // echo 'Client IP: ' . $_SERVER['REMOTE_ADDR'];
                    // echo '<br/>';
                    // echo 'referrel url: ' . $ref;
                    // echo '<br/>';
                    // echo 'results count: ' . $resultcount;
                    // echo '<br/>';
                    // echo 'Street: ' . $street;
                    // echo '<br/>';
                    // echo 'Zip: ' . $zip;
                 ?>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row top-info -->
    <div class="row">
        <div class="col-md-12">

<!--             <form method="post">
            
                <input name="street" type="text" placeholder="Address" />
                <input name="zip" type="text" placeholder="Zip Code" />
                <input type="submit" value="GO!" />

                <?php if (isset($oXML->Error)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $oXML->Error?>
                    </div>
                <?php } ?>

            </form> -->
<!-- 
            <?php if (isset($results)){ ?>
                <h1 class="results-headline">Service Results <span class="grey">for</span> <?php echo $zip?></h1>
            <?php } ?> -->
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>
<!-- /.results-header -->
<?php if (isset($results)){ ?>
<section class="results">
    <div class="row">
        <div class="col-md-12">
            <table class="results-tbl tablesaw-stack" >
                <thead class="hidden-xs">
                    <tr>
                        <th class="provider-th">Provider</th>
                        <th class="features-th">Plans &amp; Features</th>
                        <th class="price-th">Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                for ($i = 0; $i < sizeof($oXML->provider); $i++) {

                    $providerID = $oXML->provider[$i]->ProviderID;

                    $providerlogo = $oXML->provider[$i]->ProviderLogo;
                    $providerCTA = str_replace("[PLUS]", "+", $oXML->provider[$i]->Promotions->Promotion->CallToAction);
                    $providerDescription = $oXML->provider[$i]->Promotions->Promotion->Description;
                    $providerSalePrice = $oXML->provider[$i]->Promotions->Promotion->SalePrice;
                    $providerFeatures = $oXML->provider[$i]->Promotions->Promotion->Features->Feature;
                    $providerDisclaimer = $oXML->provider[$i]->Promotions->Promotion->Disclaimer;

                    //print sizeof($oXML->provider[$i]->Promotions->Promotion->Features->Feature) . "<br />";

                    if (isset($providerCTA) || isset($providerDescription) || isset($providerSalePrice) ){

                        switch ($providerID) {
                            case "1": //twc
                                $link = "/time-warner-cable/time-warner-cable-bundles/";
                                break;
                            case "2": //at&t uverse
                                $link = "/att/att-u-verse-bundles/";
                                break;
                            case "5": //Charter
                                $link = "/charter-spectrum/charter-spectrum-bundles/";
                                break;
                            case "7": //Xfinity
                                $link = "/xfinity/xfinity-bundles/";
                                break;
                            case "8": //Cox
                                $link = "/cox/cox-bundles/";
                                break;
                            case "9": //Verizon FiOS
                                $link = "/verizon/verizon-fios-bundles/";
                                break;
                            case "13": //Verizon FiOS
                                $link = "/verizon/verizon-fios-bundles/";
                                break;
                            case "15": //Verizon Internet
                                $link = "/verizon/verizon-fios-bundles/";
                                break;
                            case "16": //AT&T DSL
                                $link = "/";
                                break;
                            case "17": //Hughesnet G4
                                $link = "/hughesnet/hughesnet-high-speed-internet/";
                                break;
                            case "18": //dish
                                $link = "/dish-network/dish-network-bundles/";
                                break;
                            case "19": // DIRECTV
                                $link = "/directv/directv-bundles/";
                                break;
                            case "20": //ADT
                                $link = "/adt/adt-home-security/";
                                break;
                            case "25": //CenturyLink
                                $link = "/centurylink/centurylink-bundles/";
                        }


                        echo "<tr>";
                        echo "<td><img src='" . $providerlogo . "' class=\"img-natural\"/></td>";
                        echo "<td class='desc'><h4>" . $providerDescription . "</h4>";
                        echo "<ul class=\"plus-list\">";
                        foreach ($providerFeatures as $feature) {
                            echo "<li>" . $feature . "</li>";
                        }
                        echo "</ul>";

                        echo "</td>";

                        echo "<td><span class=\"price-intro\">Starting at</span><br />
                                  <span class=\"price\">$" . $providerSalePrice . "</span><br />
                                  <a href=\"$link\" class=\"btn btn-orange\">More Info</a><br />

                                  ";

                        if (isset($providerDisclaimer)) {
                            echo '<a href="#" class="disclaimer">View Disclaimer</a>';
                        }

                        echo "</td></tr>";
                        echo '<tr class="disclaimer-row">';
                            echo '<td colspan="3">';
                                if (isset($providerDisclaimer)){

                                    echo $providerDisclaimer;
                                }
                            echo '</td>';
                        echo '</tr>';

                    }
                }

                ?>
                </tbody>
            </table>
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</section>
<?php } ?>
<!-- /.results-header -->
</div> <!-- /results-page -->

<style>
    .results-tbl tbody > tr.disclaimer-row{
        display:none;
    }
</style>
<?php include 'modal-form.php' ?>
<?php get_footer(); ?>