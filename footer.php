<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Weeble
 * @subpackage Sergey Sharyn
 * @since Sergey Sharyn 1.0
 */
?>
<!-- LOAD JQUERY LIBRARY -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

<!-- REVOLUTION JS FILES -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading) -->
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/extensions/revolution.extension.video.min.js"></script>

<script>
	var tpj=jQuery;
	var revapi48;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_48_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_48_1");
		}else{
			revapi48 = tpj("#rev_slider_48_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"../../revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"on",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "vertical",
						drag_block_vertical: false
					}
				},
				responsiveLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,720],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});	/*ready*/
</script>
</body>
</html>
<?php wp_footer(); ?>
</body>
</html>
