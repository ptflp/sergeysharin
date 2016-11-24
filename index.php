<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Weeble
 * @subpackage Sergey Sharyn
 * @since Sergey Sharyn 1.0
 */

get_header(); 
$data = array(
	'data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'460\',\'400\',\'-160\',\'-80\']"
	data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'330\',\'280\',\'350\',\'200\']"',
	
	'data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'720\',\'560\',\'0\',\'80\']"
	data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'330\',\'280\',\'350\',\'200\']"',
	
	
	'data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'980\',\'720\',\'160\',\'-80\']"
	data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'330\',\'280\',\'350\',\'310\']"',
	
	'data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'460\',\'400\',\'-160\',\'80\']"
	data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'507\',\'390\',\'460\',\'310\']"',
	
	'data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'720\',\'560\',\'0\',\'-80\']"
	data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'507\',\'390\',\'460\',\'420\']"',
	
	'data-x="[\'left\',\'left\',\'center\',\'center\']" data-hoffset="[\'980\',\'720\',\'160\',\'80\']"
	data-y="[\'top\',\'top\',\'top\',\'top\']" data-voffset="[\'507\',\'390\',\'460\',\'420\']"'
);
$data1 = array(
	'data-x="[\'right\',\'right\',\'center\',\'center\']" data-hoffset="[\'400\',\'400\',\'-175\',\'-175\']"',
	
	'data-x="[\'right\',\'right\',\'center\',\'center\']" data-hoffset="[\'330\',\'330\',\'-105\',\'-105\']"',
	
	'data-x="[\'right\',\'right\',\'center\',\'center\']" data-hoffset="[\'260\',\'260\',\'-35\',\'-35\']"',
	
	'data-x="[\'right\',\'right\',\'center\',\'center\']" data-hoffset="[\'190\',\'190\',\'35\',\'35\']"',
	
	'data-x="[\'right\',\'right\',\'center\',\'center\']" data-hoffset="[\'120\',\'120\',\'105\',\'105\']"',
	
	'data-x="[\'right\',\'right\',\'center\',\'center\']" data-hoffset="[\'50\',\'50\',\'175\',\'175\']"'
);
?>
<!-- SLIDER EXAMPLE -->
<section class="example">
	<article class="content">
	<div id="rev_slider_48_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="photography1" style="background-color:transparent;padding:0px;">
	<!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
	<div id="rev_slider_48_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.0.7">
	<ul>	<!-- SLIDE  -->
	<li data-index="rs-163" data-transition="slideoververtical" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php bloginfo('template_url'); ?>/images/photography1-100x50.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
	<!-- MAIN IMAGE -->
	<img src="<?php bloginfo('template_url'); ?>/images/photography1.jpg"  alt=""  data-bgposition="left center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
	<!-- LAYERS -->

	<!-- LAYER NR. 1 -->
	<div class="tp-caption Photography-Subline   tp-resizeme"
	id="slide-163-layer-4"
	data-x="['center','center','center','center']" data-hoffset="['162','42','0','0']"
	data-y="['middle','middle','middle','middle']" data-voffset="['-157','-157','-157','-80']"
	data-fontsize="['20','20','20','17']"
	data-lineheight="['30','30','30','26']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="500"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 5; white-space: nowrap;">HI, MY NAME IS <span style="color: #fff;">SERGEY</span> AND I LOVE
	</div>

	<!-- LAYER NR. 2 -->
	<div class="tp-caption Photography-Display   tp-resizeme"
	id="slide-163-layer-1"
	data-x="['center','center','center','center']" data-hoffset="['153','33','0','0']"
	data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-40','-20']"
	data-fontsize="['80','80','80','40']"
	data-lineheight="['70','70','70','50']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="750"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 6; white-space: nowrap;">DESIGN &
	</div>

	<!-- LAYER NR. 3 -->
	<div class="tp-caption Photography-Display   tp-resizeme"
	id="slide-163-layer-3"
	data-x="['center','center','center','center']" data-hoffset="['280','160','0','0']"
	data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','20']"
	data-fontsize="['80','80','80','40']"
	data-lineheight="['70','70','70','50']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="1000"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 7; white-space: nowrap; color: rgba(0, 255, 222, 1.00);">PHOTOGRAPHY
	</div>

	<!-- LAYER NR. 4 -->
	<div class="tp-caption rev-btn rev-maxround rev-bordered  "
	id="slide-163-layer-6"
	data-x="['center','center','center','center']" data-hoffset="['55','-66','0','0']"
	data-y="['middle','middle','bottom','bottom']" data-voffset="['181','181','100','100']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_out="x:inherit;y:inherit;"
	data-start="1250"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
	data-basealign="slide"
	data-responsive_offset="on"
	data-responsive="off"

	style="z-index: 8; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 600; color: rgba(255, 255, 255, 1.00);font-family:Raleway;background-color:rgba(0, 0, 0, 0);padding:13px 35px 13px 35px;border-color:rgba(255, 255, 255, 0.25);border-style:solid;border-width:1px;border-radius:30px 30px 30px 30px;letter-spacing:1px;">MY PORTFOLIO
	</div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-164" data-transition="slideoververtical" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php bloginfo('template_url'); ?>/images/photography2-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Portfolio" data-description="">
	<!-- MAIN IMAGE -->
		<img src="<?php bloginfo('template_url'); ?>/images/photography2.jpg"  alt=""  data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<div class="tp-caption Photography-Subline   tp-resizeme"
		id="slide-164-layer-4"
		data-x="['center','center','center','center']" data-hoffset="['-8','40','0','0']"
		data-y="['middle','middle','middle','middle']" data-voffset="['-161','-161','-187','-197']"
		data-fontsize="['20','20','20','17']"
		data-lineheight="['30','30','30','26']"
		data-width="none"
		data-height="none"
		data-whitespace="nowrap"
		data-transform_idle="o:1;"

		data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
		data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
		data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
		data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
		data-start="500"
		data-splitin="none"
		data-splitout="none"
		data-responsive_offset="on"


		style="z-index: 5; white-space: nowrap;">SOME OF MY <span style="color: #fff;">BEST WORK</span>
		</div>
		<?
		$posts = get_posts('category=1&posts_per_page=6');
		$i=0;
		foreach ($posts as $post) : setup_postdata($post);
		?>
			<div class="tp-caption Photography-ImageHover   tp-resizeme"
			id="slide-164-layer-7"
			<?=$data[$i++]?>		
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
			data-transform_hover="o:0.5;sX:0.8;sY:0.8;rX:0;rY:0;rZ:0;z:0;s:1000;e:Power3.easeInOut;"
			data-style_hover="c:rgba(255, 255, 255, 1.00);cursor:pointer;"

			data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
			data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
			data-mask_in="x:0px;y:0px;"
			data-mask_out="x:inherit;y:inherit;"
			data-start="750"
			data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-<? the_ID(); ?>","delay":""}]'
			data-responsive_offset="on"


			style="z-index: 6; line-height: 22px;font-family:Arial;">			
			<?
			$attr = array(
			'alt'   => "",
			'data-ww' => "['250px','150px','150px','150px']",
			'data-hh' => "['167px','100px','100px','100px']",			
			'data-no-retina' => ""
			);
			the_post_thumbnail(array(300,200), $attr);
			?>
			</div>
		<?
		endforeach;
		wp_reset_postdata();
		?>
	</li>	
	
	<?
	$posts = get_posts('category=1&posts_per_page=6');
	foreach ($posts as $post) : setup_postdata($post);
	?>
		<!-- SLIDE  -->
		<li data-index="rs-<? the_ID(); ?>" data-transition="slideoverhorizontal" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php bloginfo('template_url'); ?>/images/photography3-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Project 1" data-description="">
			<!-- MAIN IMAGE -->			
			<?
			$attr = array(
			'alt'   => "",
			'data-bgposition' => "center",
			'data-bgfit' => "cover",
			'data-bgrepeat' => "no-repeat",
			'data-bgsize' => "cover",
			'class' => "rev-slidebg",
			'data-no-retina' => ""
			);
			the_post_thumbnail('full', $attr);
			?>
			<!-- LAYERS -->

			<!-- LAYER NR. 1 -->
			<div class="tp-caption Photography-Display   tp-resizeme"
			id="slide-<? the_ID(); ?>-layer-1"
			data-x="['left','left','center','center']" data-hoffset="['80','80','0','0']"
			data-y="['top','top','top','top']" data-voffset="['170','130','200','140']"
			data-fontsize="['60','60','60','40']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"

			data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
			data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
			data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
			data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
			data-start="500"
			data-splitin="none"
			data-splitout="none"
			data-basealign="slide"
			data-responsive_offset="on"


			style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 50px;"><? the_title();?>
			</div>

			<!-- LAYER NR. 2 -->
			<div class="tp-caption Photography-Subline   tp-resizeme"
			id="slide-<? the_ID(); ?>-layer-4"
			data-x="['left','left','center','center']" data-hoffset="['80','80','0','0']"
			data-y="['top','top','top','top']" data-voffset="['229','189','259','192']"
			data-fontsize="['20','20','20','17']"
			data-lineheight="['30','30','30','26']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"

			data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
			data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
			data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
			data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
			data-start="750"
			data-splitin="none"
			data-splitout="none"
			data-basealign="slide"
			data-responsive_offset="on"


			style="z-index: 6; white-space: nowrap;">Sergey Sharyn
			</div>

			<!-- LAYER NR. 3 -->
			<div class="tp-caption Photography-Textblock   tp-resizeme"
			id="slide-<? the_ID(); ?>-layer-7"
			data-x="['left','left','center','center']" data-hoffset="['80','80','0','6']"
			data-y="['top','top','top','top']" data-voffset="['320','280','323','255']"
			data-lineheight="['30','30','30','26']"
			data-width="['490','492','500','400']"
			data-height="none"
			data-whitespace="normal"
			data-transform_idle="o:1;"

			data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
			data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
			data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
			data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
			data-start="1000"
			data-splitin="none"
			data-splitout="none"
			data-basealign="slide"
			data-responsive_offset="on"


			style="z-index: 7; min-width: 490px; max-width: 490px; white-space: normal;"><? the_excerpt(); ?>
			</div>

			<!-- LAYER NR. 4 -->
			<div class="tp-caption Photography-Button rev-btn "
			id="slide-<? the_ID(); ?>-layer-6"
			data-x="['left','left','center','center']" data-hoffset="['80','80','0','0']"
			data-y="['top','top','bottom','bottom']" data-voffset="['600','530','100','100']"
			data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
			data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
			data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"

			data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
			data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
			data-mask_out="x:inherit;y:inherit;"
			data-start="1250"
			data-splitin="none"
			data-splitout="none"
			data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
			data-basealign="slide"
			data-responsive_offset="on"
			data-responsive="off"

			style="z-index: 8; white-space: nowrap;letter-spacing:1px;">Назад
			</div>
		</li>	
	<?
	endforeach;
	wp_reset_postdata();
	?>
	
	
	
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-171" data-transition="slideoververtical" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php bloginfo('template_url'); ?>/images/photography9-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="About" data-description="&lt;p&gt;&lt;br data-mce-bogus=\&quot;1\&quot;&gt;&lt;/p&gt;
	">
	<!-- MAIN IMAGE -->
	<img src="<?php bloginfo('template_url'); ?>/images/photography9.jpg"  alt=""  data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
	<!-- LAYERS -->

	<!-- LAYER NR. 1 -->
	<div class="tp-caption Photography-Display   tp-resizeme"
	id="slide-171-layer-1"
	data-x="['left','left','center','center']" data-hoffset="['80','80','0','0']"
	data-y="['top','top','top','top']" data-voffset="['170','130','200','140']"
	data-fontsize="['60','60','60','40']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="500"
	data-splitin="none"
	data-splitout="none"
	data-basealign="slide"
	data-responsive_offset="on"


	style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 50px; color: rgba(0, 255, 222, 1.00);">WHAT I DO
	</div>

	<!-- LAYER NR. 2 -->
	<div class="tp-caption Photography-Subline   tp-resizeme"
	id="slide-171-layer-4"
	data-x="['left','left','center','center']" data-hoffset="['80','80','0','0']"
	data-y="['top','top','top','top']" data-voffset="['229','189','259','192']"
	data-fontsize="['20','20','20','17']"
	data-lineheight="['30','30','30','26']"
	data-width="['204','201','none','none']"
	data-height="none"
	data-whitespace="['normal','normal','nowrap','nowrap']"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="750"
	data-splitin="none"
	data-splitout="none"
	data-basealign="slide"
	data-responsive_offset="on"


	style="z-index: 6; min-width: 204px; max-width: 204px; white-space: normal;">PHOTOGRAPHY
	DESIGN
	</div>

	<!-- LAYER NR. 3 -->
	<div class="tp-caption Photography-Subline   tp-resizeme"
	id="slide-171-layer-8"
	data-x="['left','left','center','center']" data-hoffset="['321','290','0','0']"
	data-y="['top','top','top','top']" data-voffset="['229','189','354','255']"
	data-fontsize="['20','20','20','17']"
	data-lineheight="['30','30','30','26']"
	data-width="['669','582','500','384']"
	data-height="none"
	data-whitespace="normal"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="750"
	data-splitin="none"
	data-splitout="none"
	data-basealign="slide"
	data-responsive_offset="on"


	style="z-index: 7; min-width: 669px; max-width: 669px; white-space: normal;">PORTRAITS + WEDDINGS + FAMILY
	PRINT CONCEPTION + BRANDING + COMPANY LOGOS
	</div>

	<!-- LAYER NR. 4 -->
	<div class="tp-caption Photography-Textblock   tp-resizeme"
	id="slide-171-layer-7"
	data-x="['left','left','center','center']" data-hoffset="['80','80','0','6']"
	data-y="['top','top','top','top']" data-voffset="['340','290','478','361']"
	data-lineheight="['30','30','30','26']"
	data-width="['490','492','500','400']"
	data-height="none"
	data-whitespace="normal"
	data-transform_idle="o:1;"

	data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="1000"
	data-splitin="none"
	data-splitout="none"
	data-basealign="slide"
	data-responsive_offset="on"


	style="z-index: 8; min-width: 490px; max-width: 490px; white-space: normal;">Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever...
	it remembers little things, long after you have forgotten everything.
	</div>

	<!-- LAYER NR. 5 -->
	<div class="tp-caption Photography-Button rev-btn "
	id="slide-171-layer-6"
	data-x="['left','left','center','center']" data-hoffset="['80','80','0','0']"
	data-y="['top','top','bottom','bottom']" data-voffset="['600','530','100','100']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_out="x:inherit;y:inherit;"
	data-start="1250"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-172","delay":""}]'
	data-basealign="slide"
	data-responsive_offset="on"
	data-responsive="off"

	style="z-index: 9; white-space: nowrap;letter-spacing:1px;">HIRE ME
	</div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-172" data-transition="slideoververtical" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php bloginfo('template_url'); ?>/images/photography_contact-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Contact" data-description="&lt;p&gt;&lt;br data-mce-bogus=\&quot;1\&quot;&gt;&lt;/p&gt;
	">
	<!-- MAIN IMAGE -->
	<img src="<?php bloginfo('template_url'); ?>/images/photography_contact.jpg"  alt=""  data-bgposition="center center" data-kenburns="on" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="120" data-scaleend="100" data-rotatestart="5" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
	<!-- LAYERS -->

	<!-- LAYER NR. 1 -->
	<div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme"
	id="slide-172-layer-9"
	data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
	data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
	data-width="full"
	data-height="full"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
	data-transform_out="auto:auto;s:1000;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-start="1500"
	data-basealign="slide"
	data-responsive_offset="on"


	style="z-index: 5;background-color:rgba(170, 170, 170, 0.25);border-color:rgba(0, 0, 0, 1.00);">
	</div>

	<!-- LAYER NR. 2 -->
	<div class="tp-caption Photography-Display   tp-resizeme"
	id="slide-172-layer-1"
	data-x="['left','left','left','left']" data-hoffset="['400','300','130','50']"
	data-y="['top','top','top','top']" data-voffset="['240','170','200','150']"
	data-fontsize="['60','60','60','40']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="500"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 50px; color: rgba(0, 0, 0, 1.00);">GET IN TOUCH
	</div>

	<!-- LAYER NR. 3 -->
	<div class="tp-caption Photography-Display   tp-resizeme"
	id="slide-172-layer-11"
	data-x="['left','left','left','left']" data-hoffset="['400','300','130','50']"
	data-y="['top','top','top','top']" data-voffset="['296','227','256','199']"
	data-fontsize="['60','60','60','40']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
	data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
	data-mask_in="x:0px;y:[100%];"
	data-mask_out="x:inherit;y:inherit;"
	data-start="750"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 50px; color: rgba(255, 255, 255, 1.00);background-color:rgba(0, 0, 0, 1.00);padding:10px 10px 10px 10px;">AND GET REAL
	</div>

	<!-- LAYER NR. 4 -->
	<div class="tp-caption Photography-Textblock   tp-resizeme"
	id="slide-172-layer-7"
	data-x="['left','left','left','left']" data-hoffset="['400','300','130','50']"
	data-y="['top','top','top','top']" data-voffset="['408','344','368','454']"
	data-lineheight="['30','30','30','26']"
	data-width="400"
	data-height="none"
	data-whitespace="normal"
	data-transform_idle="o:1;"

	data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;"
	data-mask_out="x:inherit;y:inherit;"
	data-start="1000"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 8; min-width: 400px; max-width: 400px; white-space: normal; color: rgba(0, 0, 0, 1.00);">The meeting of two personalities is like the contact of two chemical substances: if there is any reaction, both are transformed.
	</div>

	<!-- LAYER NR. 5 -->
	<div class="tp-caption Photography-Subline   tp-resizeme"
	id="slide-172-layer-4"
	data-x="['left','left','left','left']" data-hoffset="['400','300','130','50']"
	data-y="['top','top','top','top']" data-voffset="['551','490','521','313']"
	data-lineheight="['30','30','30','26']"
	data-width="['400','400','400','none']"
	data-height="none"
	data-whitespace="['normal','normal','nowrap','nowrap']"
	data-transform_idle="o:1;"

	data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="1250"
	data-splitin="none"
	data-splitout="none"
	data-responsive_offset="on"


	style="z-index: 9; min-width: 400px; max-width: 400px; white-space: normal; font-size: 17px; color: rgba(0, 0, 0, 1.00);"><i class="fa-icon-map-marker" style="color:#000;width:25px;"></i> Photo Street 7654, LA<br/>
	<i class="fa-icon-phone" style="color:#000;width:25px;"></i>+79245903004<br/>
	<i class="fa-icon-envelope-o" style="color:#000;width:25px;"></i> info@themepunch.com<br/>
	<i class="fa-icon-clock-o"  style="color:#000;width:25px;"></i> Monday - Saturday 07:30 - 22:30
	</div>
	</li>
	</ul>
	<div class="tp-static-layers">

	<!-- LAYER NR. 1 -->
	<div class="tp-caption   tp-static-layer"
	id="slide-18-layer-2"
	data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
	data-y="['top','top','top','top']" data-voffset="['30','30','30','30']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-style_hover="cursor:pointer;"

	data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="auto:auto;s:300;"
	data-start="500"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-163","delay":""}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"

	style="z-index: 5;"><img src="<?php bloginfo('template_url'); ?>/images/cameraicon.png" alt="" width="64" height="48" data-ww="['32px','32px','32px','32px']" data-hh="['24px','24px','24px','24px']" data-no-retina>
	</div>

	<!-- LAYER NR. 2 -->
	<div class="tp-caption rev-burger revb-whitenoborder  tp-static-layer"
	id="slide-18-layer-16"
	data-x="['right','right','right','right']" data-hoffset="['14','14','14','14']"
	data-y="['top','top','top','top']" data-voffset="['10','10','10','10']"
	data-width="60"
	data-height="60"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-style_hover="cursor:pointer;"

	data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="s:300;s:300;"
	data-start="1000"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"toggleclass","layer":"slide-18-layer-16","delay":"0","classname":"open"},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-18-layer-5","delay":""},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-18-layer-6","delay":""},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-18-layer-7","delay":""},{"event":"click","action":"togglelayer","layerstatus":"hidden","layer":"slide-18-layer-8","delay":""}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"

	style="z-index: 6; min-width: 60px; max-width: 60px; max-width: 60px; max-width: 60px; white-space: nowrap; font-size: px; line-height: px; font-weight: 100;padding:22px 0px 0px 14px;border-color:rgba(68, 68, 68, 1.00);border-radius:50% 50% 50% 50%;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
	<span></span>
	<span></span>
	<span></span>

	</div>

	<!-- LAYER NR. 3 -->
	<a class="tp-caption   tp-static-layer"
	href="https://www.instagram.com/sergeysharinwed/" target="_blank"			 id="slide-18-layer-3"
	data-x="['left','left','left','left']" data-hoffset="['67','67','67','67']"
	data-y="['bottom','bottom','bottom','bottom']" data-voffset="['30','30','30','30']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-visibility="['on','on','off','off']"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgb(169, 0, 93);cursor:pointer;"

	data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="auto:auto;s:300;"
	data-start="500"
	data-splitin="none"
	data-splitout="none"
	data-actions=''
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"

	style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);background-color:rgba(0, 0, 0, 1.00);padding:6px 10px 4px 11px;border-radius:30px 30px 30px 30px;"><i class="fa-icon-instagram"></i>
	</a>

	<!-- LAYER NR. 4 -->
	<a class="tp-caption   tp-static-layer"
	href="https://vk.com/sharin1" target="_blank"			 id="slide-18-layer-4"
	data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
	data-y="['bottom','bottom','bottom','bottom']" data-voffset="['30','30','30','30']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-visibility="['on','on','off','off']"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(85, 172, 238, 1.00);cursor:pointer;"

	data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="auto:auto;s:300;"
	data-start="500"
	data-splitin="none"
	data-splitout="none"
	data-actions=''
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"

	style="z-index: 8; white-space: nowrap; font-size: 17px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);background-color:rgba(0, 0, 0, 1.00);padding:6px 7px 4px 9px;border-radius:30px 30px 30px 30px;"><i class="fa-icon-vk"></i>
	</a>

	<!-- LAYER NR. 5 -->
	<div class="tp-caption Photography-Menuitem   tp-static-layer"
	id="slide-18-layer-5"
	data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
	data-y="['top','top','top','top']" data-voffset="['80','80','80','80']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Linear.easeNone;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 255, 222, 0.65);cursor:pointer;"

	data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:700;e:Power3.easeInOut;"
	data-transform_out="x:[100%];s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="bytrigger"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-163","delay":""},{"event":"click","action":"simulateclick","layer":"slide-18-layer-16","delay":"0"}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"
	data-end="bytrigger"
	data-lasttriggerstate="keep"
	style="z-index: 9; white-space: nowrap;">INTRO
	</div>

	<!-- LAYER NR. 6 -->
	<div class="tp-caption Photography-Menuitem   tp-static-layer"
	id="slide-18-layer-6"
	data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
	data-y="['top','top','top','top']" data-voffset="['110','110','110','110']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Linear.easeNone;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 255, 222, 0.65);cursor:pointer;"

	data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:700;e:Power3.easeInOut;"
	data-transform_out="x:[100%];s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="bytrigger"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""},{"event":"click","action":"simulateclick","layer":"slide-18-layer-16","delay":"0"}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"
	data-end="bytrigger"
	data-lasttriggerstate="keep"
	style="z-index: 10; white-space: nowrap;">MY PORTFOLIO
	</div>

	<!-- LAYER NR. 7 -->
	<div class="tp-caption Photography-Menuitem   tp-static-layer"
	id="slide-18-layer-7"
	data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
	data-y="['top','top','top','top']" data-voffset="['140','140','140','140']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Linear.easeNone;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 255, 222, 0.65);cursor:pointer;"

	data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:700;e:Power3.easeInOut;"
	data-transform_out="x:[100%];s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="bytrigger"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-171","delay":""},{"event":"click","action":"simulateclick","layer":"slide-18-layer-16","delay":"0"}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"
	data-end="bytrigger"
	data-lasttriggerstate="keep"
	style="z-index: 11; white-space: nowrap;">ABOUT ME
	</div>

	<!-- LAYER NR. 8 -->
	<div class="tp-caption Photography-Menuitem   tp-static-layer"
	id="slide-18-layer-8"
	data-x="['right','right','right','right']" data-hoffset="['30','30','30','30']"
	data-y="['top','top','top','top']" data-voffset="['170','170','170','170']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-transform_idle="o:1;"
	data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:200;e:Linear.easeNone;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 255, 222, 0.65);cursor:pointer;"

	data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:700;e:Power3.easeInOut;"
	data-transform_out="x:[100%];s:500;e:Power3.easeInOut;s:500;e:Power3.easeInOut;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="bytrigger"
	data-splitin="none"
	data-splitout="none"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-172","delay":""},{"event":"click","action":"simulateclick","layer":"slide-18-layer-16","delay":"0"}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="0"
	data-endslide="9"
	data-end="bytrigger"
	data-lasttriggerstate="keep"
	style="z-index: 12; white-space: nowrap;">CONTACT
	</div>

	<!-- LAYER NR. 9 -->
	<div class="tp-caption tp-shape tp-shapewrapper   tp-static-layer"
	id="slide-18-layer-9"
	data-x="['right','right','center','center']" data-hoffset="['30','30','0','0']"
	data-y="['bottom','bottom','bottom','bottom']" data-voffset="['30','30','30','30']"
	data-width="460"
	data-height="87"
	data-whitespace="nowrap"
	data-visibility="['on','on','off','off']"
	data-transform_idle="o:1;"
	data-style_hover="cursor:pointer;"

	data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="y:[100%];s:1000;s:1000;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	data-start="500"
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="2"
	data-endslide="7"

	style="z-index: 13;background-color:rgba(0, 0, 0, 0.65);border-color:rgba(0, 0, 0, 1.00);">
	</div>

	
	
	<?
	$posts = get_posts('category=1&posts_per_page=6');	
	$i=0;
	foreach ($posts as $post) : setup_postdata($post);
	?>
	
	<!-- LAYER NR. 10 -->
	<div class="tp-caption photography-ImageHover2   tp-static-layer"
	id="slide-18-layer-10"
	<?=$data1[$i++]?>
	data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','50']"
	data-width="none"
	data-height="none"
	data-whitespace="nowrap"
	data-visibility="['on','on','off','off']"
	data-transform_idle="o:1;"
	data-transform_hover="o:0.5;sX:0.8;sY:0.8;rX:0;rY:0;rZ:0;z:0;s:500;e:Back.easeOut;"
	data-style_hover="c:rgba(255, 255, 255, 1.00);cursor:pointer;"

	data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
	data-transform_out="opacity:0;s:1000;s:1000;"
	data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	data-start="500"
	data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-<? the_ID(); ?>","delay":""}]'
	data-basealign="slide"
	data-responsive_offset="off"
	data-responsive="off"
	data-startslide="2"
	data-endslide="7"

	style="z-index: 14; line-height: 22px;font-family:Arial;border-color:rgba(255, 255, 255, 0);">	
	<?
	$attr = array(
    'alt'   => "",
	'data-ww' => "['70px','70px','70px','70px']",
	'data-hh' => "['47px','47px','47px','47px']",
	'data-no-retina' => ""
	);
	the_post_thumbnail(array(300,200), $attr);?>
	</div>
	<?
	endforeach;
	wp_reset_postdata();
	?>

	</div>
	<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
	</div><!-- END REVOLUTION SLIDER -->
	</article>
</section>

<?php get_footer(); ?>