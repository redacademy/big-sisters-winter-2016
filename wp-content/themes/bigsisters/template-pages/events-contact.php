<?php
/**
* Template Name: Contact Person
**/
//get_header();?>

<section class="to-donate-sponsor">
  <?php echo CFS()->get('introduction_text'); ?>
  <div class="donor-contact">
    <div class="name-number-wrap">
      <span><?php echo CFS()->get('contact_name'); ?></span>
      <span><?php echo CFS()->get('phone'); ?></span>
    </div> <!-- .name-number-up -->
    <span><a href="mailto:<?php echo CFS()->get('email'); ?>" ><?php echo CFS()->get('email'); ?></a></span>
  </div> <!-- .donor-contact -->
</section>


<?php //get_footer(); ?>
