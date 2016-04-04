<?php
/**
* Template Name: Contact Us
**/
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="contact-us">

        <div class="page-header-style">
          <h1>Contact Us</h1>
        </div> <!-- .page-header -->

        <div class="locations-questions">
          <div class="our-locations">
            <h2>Our Locations</h2>

            <div class="head-office">
              <div class="contact-location">

                <div class="contact-info">
                  <h3>Head Office</h3>

                  <div class="address">
                    <p>34 E. 12th Avenue</p>
                    <p>Vancouver, BC</p>
                    <p>V5T 2G5</p>
                  </div> <!-- .address -->

                  <div class="phone-fax-email">
                    <p>P: 604.873.4525</p>
                    <p>F: 604.873.2122</p>
                    <p>E: <a href="mailto:info@bigsisters.bc.ca">info@bigsisters.bc.ca</a></p>
                  </div> <!-- .phone-fax-email -->

                </div> <!-- .contact-info -->

                <div class="location-photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/big-sisters-house.jpg" alt="The Big Sisters house." />
                </div> <!-- .location-photo -->

              </div> <!-- .contact-location -->

              <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4639.5930762758235!2d-123.107351492048!3d49.25965091907257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673e3e3292327%3A0xbcd64bcfc255ab37!2s34+E+12th+Ave%2C+Vancouver%2C+BC+V5T+2G5!5e0!3m2!1sen!2sca!4v1459742546546" style="border:0" allowfullscreen></iframe>
              </div> <!-- .google-map -->

            </div> <!-- .head-office -->

            <hr>

            <div class="satellite-office">
              <div class="contact-location">

                <div class="contact-info">
                  <h3>Satelitte Office</h3>

                  <div class="address">
                    <p>1585 W. 4th Avenue</p>
                    <p>Vancouver, BC</p>
                    <p>V6J 1L6</p>
                  </div> <!-- .address -->

                  <div class="phone-fax-email">
                    <p>P: 604.873.4525</p>
                    <p>F: 604.428.1232</p>
                    <p>E: <a href="mailto:info@bigsisters.bc.ca">info@bigsisters.bc.ca</a></p>
                  </div>

                </div> <!-- .contact-info -->

                <div class="location-photo">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/bs-office.jpg" alt="The Big Sisters Study Buddy satellite office." />
                </div> <!-- .location-photo -->

              </div> <!-- .contact-location -->

              <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.445241391634!2d-123.14276778479571!3d49.267959979735586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c8f94a6e9f%3A0x66aa685085ad942a!2s1585+W+4th+Ave%2C+Vancouver%2C+BC+V6J+1L6!5e0!3m2!1sen!2sca!4v1459742908963" style="border:0" allowfullscreen></iframe>
              </div> <!-- .google-map -->

            </div> <!-- .satelitte-office -->

          </div> <!-- .our-locations -->

          <div class="questions-feedback">
            <h2>Questions or Feedback</h2>

            <form class="feedback-form">
              <input type="text" name="firstname" placeholder="First Name">
              <input type="text" name="lastname" placeholder="Last Name">
              <input type="tel" name="telephone" placeholder="Phone Number">
              <input type="email" name="email" placeholder="E-mail">
              <input type="text" name="subject" placeholder="Subject">
              <textarea name="message" rows="8" cols="40" placeholder="Message"></textarea>
              <button class="button-deepblue" type="button" name="send">Send</button>
            </form> <!-- .feedback-form -->

          </div> <!-- .questions-feedback -->
        </div> <!-- .locations-questions -->

        <div class="staff-directory">
          <h2>Staff Directory</h2>
          <?php echo CFS()->get('staff_directory'); ?>

        </div>

      </div> <!-- .contact-us -->

    </main> <!-- #main -->
  </div> <!-- #primary -->

<?php get_footer(); ?>
