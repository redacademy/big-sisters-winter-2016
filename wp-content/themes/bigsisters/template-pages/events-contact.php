<?php
/**
* Template Name: Contact Person
**/
//get_header();?>

<section class="to-donate-sponsor">
  <h2>Want to sponsor or donate to an event?</h2>
  <p>Please contact our manager of Corporate and Foundation giving</p>
  <div class="donor-contact">
    <div class="name-number-wrap">
      <span><?php echo CFS()->get('contact_name'); ?></span>
      <span><?php echo CFS()->get('phone'); ?></span>
    </div> <!-- .name-number-up -->
    <span><a href="mailto:<?php echo CFS()->get('email'); ?>" ><?php echo CFS()->get('email'); ?></a></span>
  </div> <!-- .donor-contact -->
</section>


<?php //get_footer(); ?>
