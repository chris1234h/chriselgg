<?php

	/**
	 * Elgg footer
	 * The standard HTML footer that displays across the site
	 * 
	 * @package Elgg
	 * @subpackage Core
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd
	 * @copyright Curverider Ltd 2008
	 * @link http://elgg.org/
	 * 
	 */
	 
	 // get the tools menu
	$menu = get_register('menu');

?>

<div class="clearfloat"></div>

<div id="layout_footer">
<table width="998" height="79" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="210" height="25">
		<?php
			echo elgg_view('footer/links');
		?>
		</td>
		
		<td width="748" height="25" align="right">
		<p class="footer_toolbar_links">
		<?php
			foreach($menu as $item) {
    			
    				echo " | <a href=\"{$item->value}\">" . $item->name . "</a>";
    			
			} 
		?>
		|
		</p>
		</td>
	</tr>
	
	<tr>
		<td width="210" height="28">
		<a href="http://www.elgg.org" target="_blank">
		<img src="<?php echo $vars['url']; ?>_graphics/powered_by_elgg_badge_drk_bckgnd.gif" border="0" />
		</a>
		</td>
		
		<td width="748" height="28" align="right">
		<p class="footer_legal_links"><small>
		 Powered by Elgg, the leading open source social networking platform
		</small>
		</p>
		</td>
	</tr>
</table>
</div><!-- /#layout_footer -->

<div class="clearfloat"></div>

</div><!-- /#page_wrapper -->
</div><!-- /#page_container -->

</body>
</html>