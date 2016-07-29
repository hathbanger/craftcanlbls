<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage cyh
  * 
 */

?>

<!-- BACKEND TODO: THIS FORM NEEDS TO SUBMIT TO THE CALL CENTER -->

<?php get_header(); ?>
<!-- This is the page specific wrapping class -->
<div class="contact">
   
<section class="contact-form">
<div class="breadcrumbs">
               <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?>
            </div>
    <div class="row">
    <div class="row-height">
    <div class="col-md-3 col-md-height bg-left">
  
      <!-- This is here for the Background pattern -->
    </div>
        <div class="col-md-6 col-md-height">
            <div class="contact-header"><h1>Contact Us</h1>
            <p>Fields marked with asterisk are required</p>
            </div> <!-- /contact-header -->
            <form action="" class="form-horizontal">
                <div class="form-group">
                    <div class="col-md-3"><label for="fname">First Name*</label></div><div class="col-md-9"><input class="form-control" type="text" name="fname" id="fname" required></div></div>
                <div class="form-group"><div class="col-md-3"><label for="lname">Last Name*</label></div><div class="col-md-9"><input class="form-control" type="text" name="lname" id="lname required"></div></div>
                <div class="form-group"><div class="col-md-3"><label for="address">Address*</label></div><div class="col-md-9"><input class="form-control" type="text" name="address" id="address" required></div></div>
                <div class="form-group"><div class="col-md-3"><label for="city">City*</label></div><div class="col-md-9"><input class="form-control" type="text" name="city" id="city" required></div></div>
                <div class="form-group">
                <div class="col-md-3">
                <label for="state">State*</label>
                </div>
                <div class="col-md-9">
                    <select class="form-control" name="state" id="state">
                      <option value="Choose Your State">Choose Your State</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    
                    </select>
                    </div>
                </div>
                <div class="form-group"><div class="col-md-3"><label for="zip">Zip</label></div><div class="col-md-9"><input class="form-control"t type="text" name="zip" id="zip" required></div></div>
                <div class="form-group"><div class="col-md-3"><label for="phone">Phone*</label></div><div class="col-md-9"><input class="form-control" type="text" name="phone" id="phone" required></div></div>
                <div class="form-group"><div class="col-md-3"><label for="email">Email</label></div><div class="col-md-9"><input class="form-control" type="text" name="email" id="email" required></div></div> 
             <div class="form-group">
             <div class="col-md-12">
                <div class="checkbox"><label for="opt-in"><input type="checkbox" name="opt-in" id="opt-in">Yes, I agree to receive information via email about special promotions, offers and discounts.</label></div>
                </div>
                </div>
                     <div class="form-group">
                     <div class="col-md-6"><label for="contact-how">How do you prefer to be contacted?</label></div>
                     <div class="col-md-6"><select name="contact-how" id="contact-how" class="form-control">
                         <option value="Phone">Phone</option>
                         <option value="Email">Email</option>
                     </select></div>
                     </div>
                     <div class="form-group">
                     <div class="col-md-6"><label for="contact-when">When do you prefer to be contacted?</label></div>
                     <div class="col-md-6"><select name="contact-when" id="contact-when" class="form-control">
                         <option value="Morning">Morning</option>
                         <option value="Afternoon">Afternoon</option>
                         <option value="Evening">Evening</option>
                     </select></div>
                     </div>
                
                <div class="form-group">
                <div class="col-md-12">
                <label for="comments">Comments</label>
                </div>
                <div class="col-md-12">
                <textarea class="form-control" name="comments" id="comments" cols="30" rows="10"></textarea>
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-12">
                <div class="checkbox">
                    <label for="tandc"><input type="checkbox" name="tandc" id="tandc">I accept the <a href="/terms-of-use">terms and conditions</a></label></div>
                    </div>
                    </div>
                    <button class="btn btn-green">Send</button>
                     </form>
                    <p>We Value Your <a href="/terms-of-use">Privacy</a></p>


                    <p><span class="bold">Connect Your Home Corporate Office</span><br />
                    4700 South Syracuse Street, Suite 450<br />
                    Denver, CO 80237</p>
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3073.016351136945!2d-104.90067778373268!3d39.62683567946506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c86fdda790337%3A0xe98dc4edb8e636e8!2s4700+S+Syracuse+St+%23450%2C+Denver%2C+CO+80237!5e0!3m2!1sen!2sus!4v1453918504942" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
              <div class="phone">
                                <span class="phone-label">Call us now:</span><a href="tel:8881234567" class="phone-number"> <?php the_field('phone_number', 'option'); ?></a>
                            </div>



           
        </div>
        <div class="col-md-3 col-md-height bg-right">
      <!-- This is here for the Background pattern -->
    </div>
        </div> <!-- /row-height -->
    </div>
</section>
<!-- /.contact-form -->



</div>
<!-- /.one-brand -->  

<?php get_footer(); ?>