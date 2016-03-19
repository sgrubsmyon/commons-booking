<?php 
/**
 * Template for the main booking review page: Item info, Booking info, User Info
 *
 * @since 0.3
 *
 */
?>
<?php // ITEM  ?>
<div class="cb-headline"><?php echo  __( 'Your Booking:', $attributes['plugin_slug'] ) . ' ' . $attributes['item_name']; ?></div>
  <div class="cb-booking-item cb-box">
  <div class="img" style="float:right;"><?php echo $attributes['item_thumb']; ?></div>
  <div class=""><?php echo $attributes['item_content']; ?></div>
</div>

<?php // REVIEW ?>
<div class="cb-headline"><?php echo __( ' Pickup & Return ', $attributes['plugin_slug'] ); ?></div>
<div class="cb-booking-review cb-box">
  <div>
    <?php echo __( 'Pickup at:', $attributes['plugin_slug'] ); ?> <strong><?php echo $attributes['location_name']; ?></strong>
  </div>
  <div>
    <?php echo __( 'Pickup date:', $attributes['plugin_slug'] ); ?> <span class="cb-date"><?php echo $attributes['date_start'] ?></span>
  </div>
  <div>
    <?php echo __( 'Return date:', $attributes['plugin_slug'] ); ?> <span class="cb-date"><?php echo $attributes['date_end']; ?></span>
  </div>  
  <div>
    <?php echo __( 'Opening hours:', $attributes['plugin_slug'] ); ?> <span class="cb-date"><?php echo $attributes['location_openinghours']; ?></span>
  </div>
</div>

<?php //USER ?>
<div class="cb-headline"><?php echo __( ' Your information ', $attributes['plugin_slug'] ); ?></div>
<div class="cb-booking-user cb-box">
  <div><?php echo __( 'Full name:', $attributes['plugin_slug'] ); ?> <strong><?php echo ( $attributes['first_name'] . ' ' . $attributes['last_name'] ); ?></strong></div>
  <div><?php echo __( 'Email:', $attributes['plugin_slug'] ); ?> <strong><?php echo $attributes['user_email']; ?></strong></div>
  <div><?php echo __( 'Address:', $attributes['plugin_slug'] ); ?> <strong><?php echo $attributes['user_address']; ?></strong></div>
  <div><?php echo __( 'Phone number:', $attributes['plugin_slug'] ); ?> <strong><?php echo $attributes['user_phone']; ?></strong></div>
</div>

<?php //LOCATION ?>
<div class="cb-headline"><?php echo  __( ' Location information: ', $attributes['plugin_slug'] ); ?></div>
<div class="cb-booking-location cb-box">
  <div class="img" style="float:right;">
    <?php echo $attributes['location_thumb'];  ?>
  </div>
  <div class="cb-adress">
    <?php echo $attributes['location_address']; ?>
  </div>
  <div class="cb-contactinfo">
    <?php echo $attributes['location_contact']; ?>
  </div>
</div>