<div class="sponsor-grid">
  <h2><?php echo CFS()->get('thank_you_msg'); ?></h2>
  <ul>
    <?php
    $upload_path = content_url() . '/uploads/';
    $loop = CFS()->get('sponsor');
    foreach($loop as $row) : ?>
    <?php $logo_image_ID = $row['sponsor_logo']; ?>
    <?php $logo_image_ALT = get_post_meta($logo_image_ID, '_wp_attachment_image_alt', true); ?>
    <?php $logo_image_URL_data = wp_get_attachment_metadata($logo_image_ID, true); ?>
    <?php $logo_image_URL = $logo_image_URL_data["file"]; ?>
    <li>	<img src="<?php echo $upload_path . $logo_image_URL; ?>" alt="<?php echo get_post_meta($row['sponsor_logo'], '_wp_attachment_image_alt', true)?>" /></li>
  <?php endforeach; ?>
</ul>
</div>
