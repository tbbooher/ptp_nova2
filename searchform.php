<?php
/**
 * The template for displaying search forms in ptp_NoVa
 *
 * @package ptp_NoVa
 */
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'ptp_nova' ); ?></span>
		<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ptp_nova' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<input type="submit" class="search-submit button" value="<?php echo esc_attr_x( 'Search', 'submit button', 'ptp_nova' ); ?>">
  </div>	
</form>
