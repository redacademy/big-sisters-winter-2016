<?php
/**
* Template Name: Contact Us
**/
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="contact-us">

        <div>
          <h1 class="page-header-style">Contact Us</h1>
        </div> <!-- .page-header -->


        <div class="locations-questions">
          <div class="our-locations">
            <h2>Our Locations</h2>
						<?php
						$upload_path = content_url() . '/uploads/';
						$loop = CFS()->get('office_locations');
						foreach($loop as $row) : ?>
						<?php $photo_image_ID = $row['location_image']; ?>
						<?php $photo_image_ALT = get_post_meta($photo_image_ID, '_wp_attachment_image_alt', true); ?>
						<?php $photo_image_URL_data = wp_get_attachment_metadata($photo_image_ID, true); ?>
						<?php if ($photo_image_ID) {
							$photo_image_URL = $photo_image_URL_data['file'];
						}  ?>
						<div class="head-office">
							<div class="contact-location">
								<div class="contact-info">
									<h3><?php echo $row['office']; ?></h3>
									<div class="address">
										<p><?php echo $row['address']; ?></p>
										<p><?php echo $row['city']; ?>, <?php echo $row['province']; ?></p>
										<p><?php echo $row['postal_code']; ?></p>
									</div><!--address-->
									<div class="phone-fax-email">
										<p>P: <?php echo $row['phone']; ?></p>
										<p>F: <?php echo $row['fax']; ?></p>
										<p>E: <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></p>
									</div><!--phone-fax-email-->
								</div><!--contact-info-->
								<div class="location-photo">
									<?php if( $photo_image_ID ): ?>
									<img src="<?php echo $upload_path . $photo_image_URL; ?>" alt="<?php echo get_post_meta($row['location_image'], '_wp_attachment_image_alt', true)?>" />
								<?php else: ?>
									<div></div>
								<?php endif; ?>
								</div><!--location-photo-->
							</div><!--contact-location"-->
							<div class="google-map">
								<iframe src="<?php echo $row['google_maps']; ?>"  style="border:0" allowfullscreen ></iframe>
								<?php echo $address; ?>
							</div><!--google-map-->
						</div><!--head-office-->
					<?php endforeach; ?>
          </div> <!-- .our-locations -->

          <div class="questions-feedback">
            <h2>Questions or Feedback</h2>
						<?php echo do_shortcode( '[contact-form-7 id="518" title="General Contact Form"]' ); ?>



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
