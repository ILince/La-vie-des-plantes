<?php 
	$martpress_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$martpress_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img',esc_url(get_template_directory_uri() .'/assets/images/breadcrumb.jpg')); 
	$martpress_breadcrumb_opacity				= get_theme_mod('breadcrumb_opacity','0.50');
	$martpress_breadcrumb_overlay_color		= get_theme_mod('breadcrumb_overlay_color','#000000');
	list($br, $bg, $bb) = sscanf($martpress_breadcrumb_overlay_color, "#%02x%02x%02x");		
		
if($martpress_hs_breadcrumb == '1') {	
?>
<div id="vf-breadcrumb-wrap" class="vf-breadcrumb-wrap" style="background: url('<?php echo esc_url($martpress_breadcrumb_bg_img); ?>') center center / cover rgba(<?php echo esc_attr($br); ?>, <?php echo esc_attr($bg); ?>, <?php echo esc_attr($bb); ?>, <?php echo esc_attr($martpress_breadcrumb_opacity); ?>); background-blend-mode: multiply;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<ol class="breadcrumb-list">
						<?php storepress_breadcrumbs();?>
					</ol>
				</div>                    
			</div>
		</div>
	</div>
</div>
<?php }else{ ?>
<div id="vf-breadcrumb-wrap">
</div>
<?php } ?>	