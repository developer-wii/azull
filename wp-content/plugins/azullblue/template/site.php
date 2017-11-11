<?php defined('ABSPATH') or die("No script kiddies please!");
if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );


}
 global $post; ?>

<div data-activetab ='' id="tabbed_area" class='tabbed-area webgroup-area'>
    <ul class='tabs group'>
    <li class='active' ><a href='#access'><span><?php _e('Access','azull')?></span></a></li>
	<li class='' ><a href='#general'><span><?php _e('Settings','azull')?></span></a></li>
    <li class='' ><a href='#overview_history'><span><?php _e('Visitors Overview','azull')?></span></a></li>
    <!-- <li class='' ><a href='#detailed_history'><span><?php //_e('Visitors Details','azull')?></span></a></li> -->
    <li class='' ><a href='#visit_history'><span><?php _e('Visits History','azull')?></span></a></li>

	<!--<li class='' ><a href='#subscriber'><span><?php //_e('Subscribers','azull')?></span></a></li>
	li class='' ><a href='#quick'><span><?php //_e('Quick (msg.)','azull')?></span></a></li>
	<li class='' ><a href='#info'><span><?php //_e('Request (info.)','azull')?></span></a></li>
	<li class='' ><a href='#bank'><span><?php //_e('Request(Repossession)','azull')?></span></a></li>
	<li class='' ><a href='#contact'><span><?php //_e('Request (contact)','azull')?></span></a></li-->
    </ul>
    
    <?php //require_once( AZULL_DIR . 'template/site-subscriber.php' );?>
    <?php //require_once( AZULL_DIR . 'template/site-quick.php' );?>
    <?php //require_once( AZULL_DIR . 'template/site-info.php' );?>
    <?php //require_once( AZULL_DIR . 'template/site-bank.php' );?>
    <?php //require_once( AZULL_DIR . 'template/site-contact.php' );?>

</div>

<p class="submit"><input type="submit" name="addsite" id="addsite" class="button-primary" value="  Save  "/></p>
<div class="clear"></div>
<style>.update-nag{display: none!important;}</style>
