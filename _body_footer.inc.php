<?php
/**
 * This is the BODY footer include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 *
 * @subpackage grey_skale
 * 
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );
?>

<hr />

<!-- =================================== START OF FOOTER =================================== -->
<div id="footer">
	<p>
		<?php
		// Display footer text (text can be edited in Blog Settings):
		$Blog->footer_text( array(
				'before'      => '',
				'after'       => ' | ',
			) );
		?>

		<?php
		// Display a link to contact the owner of this blog (if owner accepts messages):
		$Blog->contact_link( array(
				'before'      => '',
				'after'       => ' | ',
				'text'   => T_('Contact'),
				'title'  => T_('Send a message to the owner of this blog...'),
			) );
		?>

		 Design by <a href="http://www.cssdizayn.com/" target="_blank">Emin Özlem</a>  (<a href="http://www.tilqi.com/" target="_blank">tilqicom</a>)
		<?php
		// Display additional credits:
		// If you can add your own credits without removing the defaults, you'll be very cool :))
		// Please leave this at the bottom of the page to make sure your blog gets listed on b2evolution.net
		credits( array(
				'list_start'  => ' | '.T_('Credits').': ',
				'list_end'    => ' ',
				'separator'   => '|',
				'item_start'  => ' ',
				'item_end'    => ' ',
			) );
		?>
grey_skale skin 1.1
	</p>
</div>
</div>
