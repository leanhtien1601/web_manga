<?php 
session_start();
$user=isset($_SESSION['user'])? $_SESSION['user']:null;
$watch = isset($_SESSION['WATCH']) ? $_SESSION['WATCH'] : [];

$totalPrice = 0;
// var_dump($cart);die;
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.mangabooth.com/manga/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 18:59:07 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="../xmlrpc.php">

	

	<title>XEM SAU</title>
	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	<link rel='dns-prefetch' href='http://s.w.org/' />
	<link rel="alternate" type="application/rss+xml" title="Madara - WordPress Theme for Manga &raquo; Feed" href="../feed/index.php" />
	<link rel="alternate" type="application/rss+xml" title="Madara - WordPress Theme for Manga &raquo; Comments Feed" href="../comments/feed/index.php" />
	<link rel="alternate" type="application/rss+xml" title="Madara - WordPress Theme for Manga &raquo; Manga Feed" href="feed/index.php" />
	<script type="text/javascript">
		window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/demo.mangabooth.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.4"}};
		!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.min4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-block-library-theme-css'  href='../wp-includes/css/dist/block-library/theme.min4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-components-css'  href='../wp-includes/css/dist/components/style.min4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-block-style-css'  href='../wp-content/plugins/woo-gutenberg-products-block/build/style77e6.css?ver=2.2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='cool-tag-cloud-css'  href='../wp-content/plugins/cool-tag-cloud/inc/cool-tag-cloude949.css?ver=2.17' type='text/css' media='all' />
	<link rel='stylesheet' id='ct-shortcode-css'  href='../wp-content/plugins/madara-shortcodes/shortcodes/css/shortcodes4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/settings23da.css?ver=5.4.8' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout3ab2.css?ver=3.6.5' type='text/css' media='all' />
	<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen3ab2.css?ver=3.6.5' type='text/css' media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce3ab2.css?ver=3.6.5' type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required { visibility: visible; }
	</style>
	<link rel='stylesheet' id='google-fonts-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i&amp;ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='fontawesome-css'  href='../wp-content/themes/madara/app/lib/fontawesome/web-fonts-with-css/css/all.minf08a.css?ver=5.2.0' type='text/css' media='all' />
	<link rel='stylesheet' id='ionicons-css'  href='../wp-content/themes/madara/css/fonts/ionicons/css/ionicons.minb523.css?ver=4.3.3' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/madara/css/bootstrap.min5b31.css?ver=4.3.1' type='text/css' media='all' />
	<link rel='stylesheet' id='slick-css'  href='../wp-content/themes/madara/js/slick/slick4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='slick-theme-css'  href='../wp-content/themes/madara/js/slick/slick-theme4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='loaders-css'  href='../wp-content/themes/madara/css/loaders.min4d2c.css?ver=5.2.4' type='text/css' media='all' />
	<link rel='stylesheet' id='madara-css-css'  href='../wp-content/themes/madara/style4d2.css?ver=5.2.4' type='text/css' media='all' />
	<style id='madara-css-inline-css' type='text/css'>
		:root{ --madara-main-color: #eb3349; }#pageloader .loader-inner.ball-pulse > div, #pageloader .loader-inner.ball-pulse-sync > div, #pageloader .loader-inner.ball-beat > div, #pageloader .loader-inner.ball-grid-pulse > div, #pageloader .loader-inner.ball-grid-beat > div, #pageloader .loader-inner.ball-pulse-rise>div, #pageloader .loader-inner.ball-rotate>div, #pageloader .loader-inner.ball-rotate>div:after, #pageloader .loader-inner.ball-rotate>div:before, #pageloader .loader-inner.cube-transition>div, #pageloader .loader-inner.ball-zig-zag>div, #pageloader .loader-inner.ball-zig-zag-deflect>div, #pageloader .loader-inner.line-scale-party>div, #pageloader .loader-inner.line-scale-pulse-out-rapid>div, #pageloader .loader-inner.line-scale-pulse-out>div, #pageloader .loader-inner.line-scale>div, #pageloader .loader-inner.line-spin-fade-loader>div, #pageloader .loader-inner.ball-scale>div, #pageloader .loader-inner.ball-scale-multiple>div, #pageloader .loader-inner.ball-spin-fade-loader>div, #pageloader .loader-inner.square-spin>div {background-color: #ffffff}#pageloader .loader-inner.ball-clip-rotate > div {border: 2px solid #ffffff; border-bottom-color: transparent;}#pageloader .loader-inner.ball-scale-ripple>div, #pageloader .loader-inner.ball-scale-ripple-multiple>div {border: 2px solid #ffffff;}#pageloader .loader-inner.ball-clip-rotate-pulse>div:first-child {background: #ffffff;}#pageloader .loader-inner.ball-clip-rotate-pulse>div:last-child {border-color: #ffffff transparent;}#pageloader .loader-inner.ball-clip-rotate-multiple>div {border: 2px solid #ffffff; border-bottom-color: transparent; border-top-color: transparent;}#pageloader .loader-inner.triangle-skew-spin>div { border-left: 20px solid transparent; border-right: 20px solid transparent; border-bottom: 20px solid #ffffff;}#pageloader .loader-inner.ball-triangle-path>div {border: 1px solid #ffffff;}#pageloader .loader-inner.semi-circle-spin>div {background-image: linear-gradient(transparent 0,transparent 70%, #ffffff 30%, #ffffff 100%);}
		#pageloader.spinners{
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			z-index:99999;
			background:#ef4546
		}
		
		p.madara-unyson{
			color: #FF0000;
		}
		
		.table.table-hover.list-bookmark tr:last-child td{
			text-align: center;
		}
		#adminmenu .wp-submenu li.current { display: none !important;}.show_tgmpa_version{ float: right; padding: 0em 1.5em 0.5em 0; }.tgmpa > h2{ font-size: 23px; font-weight: 400; line-height: 29px; margin: 0; padding: 9px 15px 4px 0;}.update-php{ width: 100%; height: 98%; min-height: 850px; padding-top: 1px; }@media only screen and (-webkit-min-device-pixel-ratio: 2),(min-resolution: 192dpi) {
			/* Retina Logo */
			.site-header .c-header__top .wrap_branding a {background:url(../wp-content/uploads/2017/10/logo-light-retina.png) no-repeat center; background-size:contain; display:block; max-width: 100%}
			.site-header .c-header__top .wrap_branding a img{ opacity:0; visibility:hidden;}
			}.c-blog-post .entry-content .entry-content_wrap .read-container img.alignleft { margin: 10px 30px 10px 0 !important; } .c-blog-post .entry-content .entry-content_wrap .read-container img.alignright { margin: 10px 0px 10px 30px !important; } .read-container i.fas.fa-spinner.fa-spin{ font-size: 31px; color: #888; }.c-blog-post .entry-content .entry-content_wrap .read-container img{ cursor : pointer; }.choose-avatar .loading-overlay {
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background-color: rgba(255, 255, 255, 0.72);
				z-index: 1;
				display: none;
			}

			.choose-avatar .loading-overlay i.fas.fa-spinner {
				font-size: 40px;
				color: #ec3348;
			}

			.choose-avatar .loading-overlay .loading-icon {
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%,-50%);
			}

			.choose-avatar.uploading .loading-overlay {
				display: block;
				}.site-header .c-sub-header-nav .entry-header {
					display: none;
					margin-bottom: 15px;
				}

				.site-header .c-sub-header-nav.sticky .entry-header {
					display: block;
				}

				.site-header .c-sub-header-nav.hide-sticky-menu.sticky .c-sub-nav_wrap{
					display:none;
				}
				.site-header .c-sub-header-nav.hide-sticky-menu .entry-header{
					margin-top:15px;
				}
				@media (max-width: 480px) {.c-blog-post .entry-content .entry-content_wrap .reading-content{margin-left:-15px;margin-right:-15px}}.archive .footer-ads, .blog .footer-ads, .single-post .footer-ads {
					display: none;
				}

				.single-post .item-content a{color: #ca383a;}
			</style>
			<script type='text/javascript' src='../wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
			<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
			<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min23da.js?ver=5.4.8'></script>
			<script type='text/javascript' src='../wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min23da.js?ver=5.4.8'></script>
			<link rel='https://api.w.org/' href='../wp-json/index.php' />
			<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
			<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
			<meta name="generator" content="WordPress 5.2.4" />
			<meta name="generator" content="WooCommerce 3.6.5" />
			<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
			<meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
			<script type="text/javascript">function setREVStartSize(e){									
				try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}						
			};</script>
			<meta property="og:image" content="http://demo.mangabooth.com/wp-content/themes/madara/images/logo.png"/>
			<meta property="og:site_name" content="Madara - WordPress Theme for Manga"/>
			<meta property="fb:app_id" content="" />
			<meta property="og:title" content="Madara - WordPress Theme for Manga | Manga"/>
			<meta property="og:description" content="Support Webtoon, WebDrama and WebNovel"/>
			<meta name="twitter:card" content="summary" />
			<meta name="twitter:site" content="@Madara - WordPress Theme for Manga" />
			<meta name="twitter:title" content="Madara - WordPress Theme for Manga | Manga" />
			<meta name="twitter:description" content="Support Webtoon, WebDrama and WebNovel" />
			<meta name="twitter:image" content="http://demo.mangabooth.com/wp-content/themes/madara/images/logo.png" />
			<meta name="description" content="Support Webtoon, WebDrama and WebNovel" /><meta name="generator" content="Powered by Madara - A powerful multi-purpose theme by Madara" />
		</head>

		<body class="archive post-type-archive post-type-archive-wp-manga wp-embed-responsive theme-madara wp-manga-page woocommerce-no-js page header-style-1 sticky-enabled sticky-style-2 is-sidebar text-ui-dark">



			<div class="wrap">
				<div class="body-wrap">
					<header class="site-header">
						<div class="c-header__top">
							<ul class="search-main-menu">
								<li>
									<form id="blog-post-search" action="http://demo.mangabooth.com/" method="get">
										<input type="text" placeholder="Search..." name="s" value="">
										<input type="submit" value="Search">
										<div class="loader-inner line-scale">
											<div></div>
											<div></div>
											<div></div>
											<div></div>
											<div></div>
										</div>
									</form>
								</li>
							</ul>
							<div class="main-navigation style-1 ">
								<div class="container ">
									<div class="row">
										<div class="col-md-12">
											<div class="main-navigation_wrap">
												<div class="wrap_branding">
													<a class="logo" href="../index.php" title="Madara - WordPress Theme for Manga">
														<img class="img-responsive" src="../wp-content/themes/madara/images/logo.png" alt="Madara - WordPress Theme for Manga"/>
													</a>
												</div>

												<div class="main-menu">
													<ul class="nav navbar-nav main-navbar"><li id="menu-item-27" class="menu-item menu-item-type-taxonomy menu-item-object-wp-manga-genre menu-item-51"><a href="../index.php">TRANG CHỦ</a>

													</li>
													<li id="menu-item-110" class="menu-item menu-item-type-taxonomy menu-item-object-wp-manga-genre menu-item-51"><a href="../manga/index.php">XEM SAU</a></li>
													<?php 
													include 'db.php';
													$sql="select * from categories limit 3";
													$kq=$conn->query($sql);
													foreach ($kq as $key => $value) {
														?>
														<li id="menu-item-75" class="menu-item menu-item-type-taxonomy menu-item-object-wp-manga-genre menu-item-51">
															<a href=" ../manga-genre/kind/index.php?id_cate=<?php echo $value['id']?>">
																<?php echo $value['name']; ?>
															</a>
														</li>
														<?php 
													}
													?>


													<li id="menu-item-75" class="menu-item menu-item-type-taxonomy menu-item-object-wp-manga-genre menu-item-51"><a href="../about-us/index.php">LIÊN HỆ</a>
													</li>
												</ul>    </div>

												<div class="search-navigation search-sidebar">


													<div id="manga-search-3" class="widget col-12 col-md-12   default no-icon  manga-widget widget-manga-search"><div class="widget__inner manga-widget widget-manga-search__inner c-widget-wrap"><div class="widget-content">
														<div class="search-navigation__wrap">

															<script>
																jQuery(document).ready(function ($) {
																	if ($('.c-header__top .manga-search-form').length !== 0 && $('.c-header__top .manga-search-form.search-form').length !== 0) {

																		$('form#blog-post-search').append('<input type="hidden" name="post_type" value="wp-manga">');

																		$('form#blog-post-search').addClass("manga-search-form");

																		$('form#blog-post-search input[name="s"]').addClass("manga-search-field");

																		$('form.manga-search-form input.manga-search-field').each(function(){

																			var searchIcon = $(this).parent().children('.ion-ios-search-strong');

																			var append = $(this).parent();

																			$(this).autocomplete({
																				appendTo: append,
																				source: function( request, resp ) {
																					$.ajax({
																						url: manga.ajax_url,
																						type: 'POST',
																						dataType: 'json',
																						data: {
																							action: 'wp-manga-search-manga',
																							title: request.term,
																						},
																						success: function( data ) {
																							resp( $.map( data.data, function( item ) {
																								if ( true == data.success ) {
																									return {
																										label: item.title,
																										value: item.title,
																										url: item.url,
																										type: item.type
																									}
																								} else {
																									return {
																										label: item.message,
																										value: item.message,
																										type: item.type,
																										click: false
																									}
																								}
																							}))
																						}
																					});
																				},
																				select: function( e, ui ) {
																					if ( ui.item.url ) {
																						window.location.href = ui.item.url;
																					} else {
																						if ( ui.item.click ) {
																							return true;
																						} else {
																							return false;
																						}
																					}
																				},
																				open: function( e, ui ) {
																					var acData = $(this).data( 'uiAutocomplete' );
																					acData.menu.element.addClass('manga-autocomplete').find('li div').each(function(){
																						var $self = $(this),
																						keyword = $.trim( acData.term ).split(' ').join('|');
																						$self.php( $self.text().replace( new RegExp( "(" + keyword + ")", "gi" ), '<span class="manga-text-highlight">$1</span>' ) );
																					});
																				}
																			}).autocomplete( "instance" )._renderItem = function( ul, item ) {
																				return $( "<li class='search-item'>" )
																				.append( "<div class='manga-type-" + item.type + "'>" + item.label + "</div>" )
																				.appendTo( ul );
																			};
																		});
																	}
																});
															</script>
															
															<div class="link-adv-search">
																<a href="../index9a43.php?s=&amp;post_type=wp-manga">Tìm kiếm</a>
															</div>

														</div>

													</div></div></div>


												</div>
												<div class="c-togle__menu">
													<button type="button" class="menu_icon__open">
														<span></span> <span></span> <span></span>
													</button>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="mobile-menu menu-collapse off-canvas">
							<div class="close-nav">
								<button class="menu_icon__close">
									<span></span> <span></span>
								</button>
							</div>


							<div class="c-modal_item">
								<!-- Button trigger modal -->
								<span class="c-modal_sign-in">
									<a href="../login.php"  class="btn-active-modal">Đăng Nhập</a>
								</span>

								<span class="c-modal_sign-up">
									<a href="../dangki.php"  class="btn-active-modal">Đăng Kí</a>
								</span>

							</div>


							<nav class="off-menu">
								<ul id="menu-main-menu-1" class="nav navbar-nav main-navbar"><li id="nav-menu-item-27" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown"><a href="../index.php" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">HOME </a>
									<ul class="dropdown-menu menu-depth-1">
										<li id="nav-menu-item-25" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../home-2/index.php" class="menu-link  sub-menu-link">HOME 2 </a></li>
										<li id="nav-menu-item-24" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../home-3/index.php" class="menu-link  sub-menu-link">HOME 3 </a></li>
										<li id="nav-menu-item-341" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../home-4/index.php" class="menu-link  sub-menu-link">HOME 4 &#8211; REV SLIDER </a></li>
										<li id="nav-menu-item-402" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../home-dark/index.php" class="menu-link  sub-menu-link">HOME DARK </a></li>
										<li id="nav-menu-item-1914" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../home-shortcodes/index.php" class="menu-link  sub-menu-link">HOME USING SHORTCODES </a></li>
										<li id="nav-menu-item-934" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../listing-big-thumbnail/index.php" class="menu-link  sub-menu-link">LISTING &#8211; BIG THUMBNAIL </a></li>
										<li id="nav-menu-item-852" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../listing-simple-list/index.php" class="menu-link  sub-menu-link">LISTING &#8211; SIMPLE LIST </a></li>
										<li id="nav-menu-item-500" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../home-single-manga/index.php" class="menu-link  sub-menu-link">SINGLE MANGA </a></li>

									</ul>
								</li>
								<li id="nav-menu-item-110" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children parent dropdown"><a href="index.php" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">MANGA </a>
									<ul class="dropdown-menu menu-depth-1">
										<li id="nav-menu-item-410" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="indexc7b7.php?genres_collapse=on" class="menu-link  sub-menu-link">ARCHIVES &#8211; SHOW GENRES </a></li>
										<li id="nav-menu-item-409" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom current-menu-item"><a href="index.php" class="menu-link  sub-menu-link">ARCHIVES &#8211; HIDE GENRES </a></li>
										<li id="nav-menu-item-386" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-wp-manga"><a href="hajime-boyfriend/index.php" class="menu-link  sub-menu-link">SINGLE MANGA </a></li>
										<li id="nav-menu-item-403" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent dropdown-submenu"><a href="#" class="menu-link  sub-menu-link">MANGA READING </a>
											<ul class="dropdown-menu menu-depth-2">
												<li id="nav-menu-item-453" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="massa-consectetur-mattis/index.php" class="menu-link  sub-menu-link">VIDEO CHAPTER </a></li>
												<li id="nav-menu-item-457" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="manga-text-chapter/index.php" class="menu-link  sub-menu-link">TEXT CHAPTER </a></li>
												<li id="nav-menu-item-404" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="ykataza-yin-wang-shynakimiz/index9056.php?display=wp-manga&amp;chapter=chapter-1&amp;style=paged" class="menu-link  sub-menu-link">LIGHT VERSION </a></li>
												<li id="nav-menu-item-405" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="dakimi-katawi-yakimimono-hajimazu-kyousou/index86e1.php?display=wp-manga&amp;chapter=chapter-1&amp;style=list&amp;body_schema=dark" class="menu-link  sub-menu-link">DARK VERSION </a></li>
												<li id="nav-menu-item-1845" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-post_type menu-item-object-wp-manga"><a href="kyojin-shingeki-no/index.php" class="menu-link  sub-menu-link">18+ Warning Manga </a></li>
												<li id="nav-menu-item-346" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="miharu-rokujou/index109b.php?display=wp-manga&amp;chapter=chapter-1_1&amp;style=list" class="menu-link  sub-menu-link">LIST STYLE </a></li>
												<li id="nav-menu-item-345" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="miharu-rokujou/indexe32c.php?display=wp-manga&amp;chapter=chapter-1_1&amp;style=paged" class="menu-link  sub-menu-link">PAGED STYLE </a></li>
												<li id="nav-menu-item-413" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="kahana-no-shou/index63bb.php?host=local&amp;display=wp-manga&amp;chapter=chapter-1&amp;style=paged" class="menu-link  sub-menu-link">MULTI HOST </a></li>
												<li id="nav-menu-item-387" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="hajime-boyfriend/index9056.php?display=wp-manga&amp;chapter=chapter-1&amp;style=paged" class="menu-link  sub-menu-link">HOST LOCAL </a></li>
												<li id="nav-menu-item-388" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="nasama-okima/indexcf2d.php?display=wp-manga&amp;chapter=chapter-2&amp;style=paged" class="menu-link  sub-menu-link">HOST AMAZON </a></li>
												<li id="nav-menu-item-407" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="kagasarete-nairantou/index9056.php?display=wp-manga&amp;chapter=chapter-1&amp;style=paged" class="menu-link  sub-menu-link">HOST PICASA </a></li>
												<li id="nav-menu-item-408" class="sub-menu-item menu-item-depth-2 menu-item menu-item-type-custom menu-item-object-custom"><a href="kahana-no-shou/index9056.php?display=wp-manga&amp;chapter=chapter-1&amp;style=paged" class="menu-link  sub-menu-link">HOST IMGUR </a></li>

											</ul>
										</li>
										<li id="nav-menu-item-347" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-custom menu-item-object-custom"><a href="../index9a43.php?s=&amp;post_type=wp-manga" class="menu-link  sub-menu-link">MANGA ADVANCED SEARCH </a></li>

									</ul>
								</li>
								<li id="nav-menu-item-23" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page current_page_parent"><a href="../blog/index.php" class="menu-link  main-menu-link">BLOG </a></li>
								<li id="nav-menu-item-75" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown"><a href="../about-us/index.php" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown">ABOUT US </a>
									<ul class="dropdown-menu menu-depth-1">
										<li id="nav-menu-item-22" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../contact/index.php" class="menu-link  sub-menu-link">CONTACT US </a></li>

									</ul>
								</li>
								<li id="nav-menu-item-596" class="main-menu-item menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent dropdown"><a href="../shop/index.php" class="menu-link dropdown-toggle disabled main-menu-link" data-toggle="dropdown"><i class="fas fa-shopping-bag"></i>  SHOP </a>
									<ul class="dropdown-menu menu-depth-1">
										<li id="nav-menu-item-595" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../cart/index.php" class="menu-link  sub-menu-link"><i class="fas fa-shopping-cart"></i> CART </a></li>
										<li id="nav-menu-item-594" class="sub-menu-item menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../checkout/index.php" class="menu-link  sub-menu-link"><i class="far fa-credit-card"></i> CHECKOUT </a></li>

									</ul>
								</li>
							</ul>    </nav>
						</div>
						<div class=" c-sub-header-nav with-border  ">
							<div class="container ">
								<div class="c-sub-nav_wrap">
									<div class="sub-nav_content">
										<ul class="sub-nav_list list-inline second-menu">
											<?php 
											include '../db.php';
											$sqlm="select * from kind ";
											$kqm=$conn->query($sqlm);
											foreach ($kqm as $key => $row) {
												?>

												<li id="menu-item-54" class="menu-item menu-item-type-taxonomy menu-item-object-wp-manga-genre menu-item-54">
													<a href="../manga-genre/kind/index1.php?id_kind=<?php echo $row['id']?>"><?php echo $row['name']; ?></a></li>	
													<i class="mobile-icon icon ion-md-more"></i>


													<?php
												}


												?>

											</ul>
										</div>

										<div class="c-modal_item">
											<div 	><?php 
															include 'db.php';
															if(isset($_SESSION['user'])){
																echo "Chào"." ".$_SESSION['user'];
																?>
																<a href="../logout.php"><button>Đăng xuất</button></a>
																<!-- <a href="doipass.php"><button>Đổi mật khẩu</button></a> -->
																<?php
															}
															else{
																?>
											<a href="../login.php"  class="btn-active-modal">Đăng Nhập</a>
											<a href="../dangki.php"  class="btn-active-modal">Đăng Kí</a>
																<?php
															}
															
															?></div>
										</div>

									</div>

								</div>
							</div>


						</header>




						<div class="site-content">
							<script type="text/javascript">
								var manga_args = {"paged":1,"orderby":"meta_value_num","template":"archive","sidebar":"right","post_type":"wp-manga","post_status":"publish","meta_key":"_latest_update","order":"DESC","meta_query":{"relation":"OR","0":[]},"error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"posts_per_page":12,"nopaging":false,"comments_per_page":"50","no_found_rows":false};
							</script>

							<div class="c-breadcrumb-wrapper" style="background-image: url(http://demo.mangabooth.com/wp-content/themes/madara/images/bg-search.jpg">

								<div class="container">
									<div class="row">
										<div class="col-md-12">

											<div class="c-breadcrumb">
												<ol class="breadcrumb">
													<li>
														<a href="../index.php">
														Trang chủ                                 </a>
													</li>
													<li>
														<a href="../manga/index.php">
														Xem sau                                 </a>
													</li>							



												</ol>
											</div>

											
											
										</div>
									</div>
								</div>
							</div>

							<div class="c-page-content style-1">
								<div class="content-area">
									<div class="container">
										<div class="row ">

											<div class="main-col col-md-8 col-sm-8">



												<!-- container & no-sidebar-->
												<div class="main-col-inner">
													<div class="c-page">



														<div class="entry-title">
															<div class="tab-wrap">
																<div class="c-blog__heading style-2 font-heading">

																	<div class="h4">
																		<i class="icon ion-ios-star"></i>
																	XEM SAU                                       </div>
																</div>
															</div>
														</div>



														<!-- <div class="c-page__inner"> -->
															<div class="c-page__content">



																<div class="tab-content-wrap">
																	<div role="tabpanel" class="c-tabs-item">
																		<div class="page-content-listing item-default">
																			<?php 
																				if(isset($_SESSION['user'])){
																					?>


																			<div class="page-listing-item">


																				<div class="row row-eq-height">

																					<?php 
																					
																					foreach ($watch as $item) {
																						?>

																						<div class="col-12 col-md-6 ">                                     	
																							<div class="page-item-detail ">
																								<div id="manga-item-311" class="item-thumb hover-details c-image-hover" data-post-id="311">
																									<a href="manga/manga-text-chapter/index.php?id_manga=<?php echo $item['id'] ?>" title="">
																										<img  
																										style="width: 100px;height: 130px;"  class="img-responsive lazyload effect-fade" src="../images/<?php echo $item['images']; ?>" style="padding-top:150px; " >                            </a>
																									</div>
																									<div class="item-summary">
																										<div class="post-title font-title">
																											<h3 class="h5">
																												<a href="manga/manga-text-chapter/index.php?id_manga=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
																											</h3>
																											
																										</div>
																										
																										<div class="list-chapter"> 
																											<div class="chapter-item "> 
																												<span class="post-on font-meta" style="margin-top: 20px;">
																													Ngày đăng truyện : <?php echo $item['date']; ?>                               </span>
																													<span class="post-on font-meta" style="margin-top: 20px;">Tác giả truyện :  
																														<?php 
																														include 'db.php';
																														$sql2="select * from authors";
																														$kq12=$conn->query($sql2);
																														foreach ($kq12 as $key => $au) {
																															?>
																															
																															
																															<?php if($au['id'] == $item['id_author']){ echo $au['name'];} ?>
																															
																															<?php
																														}
																														?>
																													</span>
																												</div> 
																												
																											</div> 
																										</div> 

																									</div>  



																								</div>
																								<?php
																							}
																							?>


																						</div>




																						<!-- dừng -->		



																					</div>
<?php

																				}
																				else{
																					?>
																					<div style="font-size:30pt;text-align: center;"><a href="../login.php">ĐĂNG NHẬP</a></div>
																					
																					<?php
																				}
																			 ?>
																					<div class="page-listing-item">

																						<div class="page-listing-item">
																							<div class="row row-eq-height">




																							</div>
																						</div>
																						<div class="page-listing-item">
																							<div class="row row-eq-height">


																							</div>
																						</div>
																						<div class="page-listing-item">
																							<div class="row row-eq-height">




																							</div>
																						</div>

																						<script type="text/javascript">
																							var __madara_query_vars = {"paged":1,"orderby":"meta_value_num","template":"archive","sidebar":"right","post_type":"wp-manga","post_status":"publish","meta_key":"_latest_update","order":"desc","meta_query":{"relation":"OR","0":[]},"manga_archives_item_layout":"default"};
																						</script>



																					</div>
																				</div>
																			</div>
																			<!-- </div> -->
																		</div>
																		<!-- paging -->
																	</div>

																	<div class="ad c-ads custom-code body-bottom-ads"><!-- <img src="../wp-content/uploads/2017/10/ads-1.jpg" alt="ads"> --></div>

																</div>

															</div>
														</div>
													</div>
												</div></div></div></div><div class="row"><div id="wp_manga_release_id-4" class="widget col-xs-12 col-md-12   bordered  no-icon heading-style-1 wp_manga_wg_year_release c-released"></div></div>        </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- <div class="site-content"> -->




							<footer class="site-footer">

								<div class="ad c-ads custom-code footer-ads col-md-12"><img src="../wp-content/uploads/2017/10/ads-1.jpg" alt="ads"></div>
								<div class="top-footer">
									<div class="container">
										<div class="row">
											<div class="col-md-12">
                                <!-- <div class="wrap_social_account">
                                	<ul class='list-inline social_account__item'><li><a class="social-icons" target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li><li><a class="social-icons" target="_blank" href="#" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a></li><li><a class="social-icons" target="_blank" href="#" title="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a></li><li><a class="social-icons" target="_blank" href="#" title="Flickr"><i class="fab fa-flickr" aria-hidden="true"></i></a></li><li><a class="social-icons" target="_blank" href="#" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li></ul>                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bottom-footer">
                    	<div class="container">
                    		<div class="row">
                    			<div class="col-md-12">

                    				<div class="nav-footer"><ul class="list-inline font-nav"><li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-76"><a href="index.php" aria-current="page">TRANG CHỦ</a></li>
                    					<!-- <li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a href="blog/index.php">LIÊN HỆ</a></li> -->
                    					<!-- <li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a href="contact/index.php">THỂ LOẠI</a></li> -->
                    					<li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a href="about-us/index.php">LIÊN HỆ</a></li>
                    					<li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80"><a href="#">XEM SAU</a></li>
                    				</ul></div>
                    				<div class="copyright">
                    					<p>© 2019 Website truyện manga Madara</p>                            </div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>

                    </footer>
                    <!-- <div class="ad c-ads custom-code wall-ads-control wall-ads-left"><a href="https://themeforest.net/item/madara-wordpress-theme-for-manga/20849828?ref=wpstylish" title="buy Madara WordPress Theme now"><img src="../wp-content/uploads/2018/02/side-ad-01.jpg" alt="buy Madara WordPress Theme now"></a></div><div class="ad c-ads custom-code wall-ads-control wall-ads-right"><a href="https://themeforest.net/item/madara-wordpress-theme-for-manga/20849828?ref=wpstylish" title="buy Madara WordPress Theme now"><img src="../wp-content/uploads/2018/02/side-ad-02.jpg" alt="buy Madara WordPress Theme now"></a></div> -->
                    <div id="hover-infor"></div>

                </div> <!-- class="wrap" --></div> <!-- class="body-wrap" -->


                <script>
                	function coolTagCloudToggle( element ) {
                		var parent = element.closest('.cool-tag-cloud');
                		parent.querySelector('.cool-tag-cloud-inner').classList.toggle('cool-tag-cloud-active');
                		parent.querySelector( '.cool-tag-cloud-load-more').classList.toggle('cool-tag-cloud-active');
                	}
                </script>

                <!-- Modal -->
                <div class="wp-manga-section">
                	<input type="hidden" name="bookmarking" value="0"/>
                	<div class="modal fade" id="form-login" tabindex="-1" role="dialog">
                		<div class="modal-dialog" role="document">
                			<div class="modal-content">
                				<div class="modal-header">
                					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                						<span aria-hidden="true">&times;</span></button>
                					</div>
                					<div class="modal-body">
                						<div id="login" class="login">
                							<h1>
                								<a href="../index.php" title="Madara - WordPress Theme for Manga" tabindex="-1">Sign in</a>
                							</h1>
                							<p class="message login"></p>
                							<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
                							<link rel='dns-prefetch' href='http://s.w.org/' />
                							<script type='text/javascript' src='../wp-includes/js/wp-embed.min4d2c.js?ver=5.2.4'></script>
                							<style type="text/css">
                								body.login div#login h1 a {
                									background-image: url(../wp-content/uploads/2017/10/logo-dark.png);
                									width: 320px;
                									height: 120px;
                									background-size: auto;
                									background-position: center;
                								}
                							</style>
                							<script type="text/javascript" src="../../www.google.com/recaptcha/api1967.js?hl=en_GB&amp;ver=5.0.4"></script>
                							<form name="loginform" id="loginform" method="post">
                								<p>
                									<label>Username or Email Address *                                    <br> <input type="text" name="log" class="input user_login" value="" size="20">
                									</label>
                								</p>
                								<p>
                									<label>Password *                                    <br> <input type="password" autocomplete="" name="pwd" class="input user_pass" value="" size="20">
                									</label>
                								</p>
                								<p>
                									<div class="g-recaptcha" id="g-recaptcha" data-sitekey="6Ldsz6QUAAAAADxlB_1jgAkKgtRjrq8kwzgLSXen" data-callback="submitEnable" data-expired-callback="submitDisable"></div>
                									<script>
                										function submitEnable() {
                											var button = document.getElementById('wp-submit');
                											if (button === null) {
                												button = document.getElementById('submit');
                											}
                											if (button !== null) {
                												button.removeAttribute('disabled');
                											}
                											var woo_buttons = [".woocommerce-form-login button",".woocommerce-form-register button",".woocommerce-ResetPassword button"];
                											if (typeof jQuery != 'undefined') {
                												jQuery.each(woo_buttons,function(i,btn) {
                													jQuery(btn).removeAttr('disabled');
                												});
                											}
                										}
                										function submitDisable() {
                											var button = document.getElementById('wp-submit');
                											if (button === null) {
                												button = document.getElementById('submit');
                											}
                											if (button !== null) {
                												button.setAttribute('disabled','disabled');
                											}
                											var woo_buttons = [".woocommerce-form-login button",".woocommerce-form-register button",".woocommerce-ResetPassword button"];
                											if (typeof jQuery != 'undefined') {
                												jQuery.each(woo_buttons,function(i,btn) {
                													jQuery(btn).attr('disabled','disabled');
                												});
                											}
                										}
                									</script>
                									<noscript>
                										<div style="width: 100%; height: 473px;">
                											<div style="width: 100%; height: 422px; position: relative;">
                												<div style="width: 302px; height: 422px; position: relative;">
                													<iframe src="https://www.google.com/recaptcha/api/fallback?k=6Ldsz6QUAAAAADxlB_1jgAkKgtRjrq8kwzgLSXen"
                													frameborder="0" title="captcha" scrolling="no"
                													style="width: 302px; height:422px; border-style: none;">
                												</iframe>
                											</div>
                											<div style="width: 100%; height: 60px; border-style: none;
                											bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                											<textarea id="g-recaptcha-response" name="g-recaptcha-response"
                											title="response" class="g-recaptcha-response"
                											style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                											margin: 10px 25px; padding: 0px; resize: none;" value="">
                										</textarea>
                									</div>
                								</div>
                							</div><br>
                						</noscript>
                					</p>
                					<p class="forgetmenot">
                						<label>
                							<input name="rememberme" type="checkbox" id="rememberme" value="forever">Remember Me                                 </label>
                						</p>
                						<p class="submit">
                							<input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Log In">                                <input type="hidden" name="redirect_to" value="http://demo.mangabooth.com/wp-admin/">
                							<input type="hidden" name="testcookie" value="1">
                						</p>
                					</form>
                					<p class="nav">
                						<a href="javascript:avoid(0)" class="to-reset">Lost your password?</a>
                					</p>
                					<p class="backtoblog">
                						<a href="javascript:void(0)">&larr; Back to Madara - WordPress Theme for Manga</a>
                					</p>
                				</div>
                			</div>
                			<div class="modal-footer"></div>
                		</div>
                	</div>
                </div>

                <div class="modal fade" id="form-sign-up" tabindex="-1" role="dialog">
                	<div class="modal-dialog" role="document">
                		<div class="modal-content">
                			<div class="modal-header">
                				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                					<span aria-hidden="true">&times;</span></button>
                				</div>
                				<div class="modal-body">
                					<div id="sign-up" class="login">
                						<h1>
                							<a href="../index.php" title="Madara - WordPress Theme for Manga" tabindex="-1">Sign Up</a>
                						</h1>
                						<p class="message register">Register For This Site.</p>
                						<form name="registerform" id="registerform" novalidate="novalidate">
                							<p>
                								<label>Username *                                    <br>
                									<input type="text" name="user_sign-up" class="input user_login" value="" size="20">
                								</label>
                							</p>
                							<p>
                								<label>Email Address *                                    <br>
                									<input type="email" name="email_sign-up" class="input user_email" value="" size="20">
                								</label>
                							</p>
                							<p>
                								<label>Password *<br>
                									<input type="password" name="pass_sign-up" autocomplete="" class="input user_pass" value="" size="25">
                								</label>
                							</p>
                							<p>
                								<div class="g-recaptcha" id="g-recaptcha" data-sitekey="6Ldsz6QUAAAAADxlB_1jgAkKgtRjrq8kwzgLSXen" data-callback="submitEnable" data-expired-callback="submitDisable"></div>
                								<script>
                									function submitEnable() {
                										var button = document.getElementById('wp-submit');
                										if (button === null) {
                											button = document.getElementById('submit');
                										}
                										if (button !== null) {
                											button.removeAttribute('disabled');
                										}
                										var woo_buttons = [".woocommerce-form-login button",".woocommerce-form-register button",".woocommerce-ResetPassword button"];
                										if (typeof jQuery != 'undefined') {
                											jQuery.each(woo_buttons,function(i,btn) {
                												jQuery(btn).removeAttr('disabled');
                											});
                										}
                									}
                									function submitDisable() {
                										var button = document.getElementById('wp-submit');
                										if (button === null) {
                											button = document.getElementById('submit');
                										}
                										if (button !== null) {
                											button.setAttribute('disabled','disabled');
                										}
                										var woo_buttons = [".woocommerce-form-login button",".woocommerce-form-register button",".woocommerce-ResetPassword button"];
                										if (typeof jQuery != 'undefined') {
                											jQuery.each(woo_buttons,function(i,btn) {
                												jQuery(btn).attr('disabled','disabled');
                											});
                										}
                									}
                								</script>
                								<noscript>
                									<div style="width: 100%; height: 473px;">
                										<div style="width: 100%; height: 422px; position: relative;">
                											<div style="width: 302px; height: 422px; position: relative;">
                												<iframe src="https://www.google.com/recaptcha/api/fallback?k=6Ldsz6QUAAAAADxlB_1jgAkKgtRjrq8kwzgLSXen"
                												frameborder="0" title="captcha" scrolling="no"
                												style="width: 302px; height:422px; border-style: none;">
                											</iframe>
                										</div>
                										<div style="width: 100%; height: 60px; border-style: none;
                										bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                										<textarea id="g-recaptcha-response" name="g-recaptcha-response"
                										title="response" class="g-recaptcha-response"
                										style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                										margin: 10px 25px; padding: 0px; resize: none;" value="">
                									</textarea>
                								</div>
                							</div>
                						</div><br>
                					</noscript>
                				</p>

                				<input type="hidden" name="redirect_to" value="">
                				<p class="submit">
                					<input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Register">
                				</p>
                			</form>
                			<p class="nav">
                				<a href="javascript:void(0)" class="to-login">Log in</a>
                				|
                				<a href="javascript:void(0)" class="to-reset">Lost your password?</a>
                			</p>
                			<p class="backtoblog">
                				<a href="javascript:void(0)">&larr; Back to Madara - WordPress Theme for Manga</a>
                			</p>
                		</div>
                	</div>
                	<div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="form-reset" tabindex="-1" role="dialog">
        	<div class="modal-dialog" role="document">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        					<span aria-hidden="true">&times;</span></button>
        				</div>
        				<div class="modal-body">
        					<div id="reset" class="login">
        						<h1>
        							<a href="javascript:void(0)" class="to-reset">Lost your password?</a>
        						</h1>
        						<p class="message reset">Please enter your username or email address. You will receive a link to create a new password via email.</p>
        						<form name="resetform" id="resetform" method="post">
        							<p>
        								<label>Username or Email Address                                    <br>
        									<input type="text" name="user_reset" id="user_reset" class="input" value="" size="20">
        								</label>
        							</p>
        							<p class="submit">
        								<input type="submit" name="wp-submit" class="button button-primary button-large wp-submit" value="Get New Password">
        								<input type="hidden" name="testcookie" value="1">
        							</p>
        						</form>
        						<p>
        							<a class="backtoblog" href="javascript:void(0)">&larr; Back to  Madara - WordPress Theme for Manga</a>
        						</p>
        					</div>
        				</div>
        				<div class="modal-footer"></div>
        			</div>
        		</div>
        	</div>

        	<script type="text/javascript">

        		function wpMangaSubmitSwitch() {
        			jQuery('.g-recaptcha-response').each(function () {
        				var submitBtn = jQuery(this).parents('form').find('input[type="submit"]');

        				if (jQuery(this).val() !== '') {
        					submitBtn.prop('disabled', false);
        				} else {
        					submitBtn.prop('disabled', true);
        				}
        			});
        		}

        		jQuery(function ($) {
        			$(document).ready(function () {

        				$('.modal form').each(function () {
        					if ($(this).find('.g-recaptcha').length !== 0) {
        						var submitBtn = $(this).find('input[type="submit"]');

        						if (typeof submitBtn !== 'undefined') {
        							submitBtn.prop('disabled', true);
        						}
        					}
        				});

        				var gRecaptcha = $('.g-recaptcha');
        				gRecaptcha.attr('data-callback', 'wpMangaSubmitSwitch');
        				gRecaptcha.attr('data-expired-callback', 'wpMangaSubmitSwitch');
        				gRecaptcha.attr('data-error', 'wpMangaSubmitSwitch');
        			});
        		});

        	</script>

        </div>
        <div class="go-to-top active">
        	<i class="icon ion-md-arrow-up"></i>
        </div>
        <script>
        	jQuery(document).ready(function ($) {
        		$('.woocommerce .quantity').on('click', '.minus', function (e) {
        			var $inputQty = $(this).parent().find('input.qty');
        			var val = parseInt($inputQty.val());
        			var step = $inputQty.attr('step');
        			step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        			if (val > 0) {
        				$inputQty.val(val - step).change();
        			}
        		});
        		$('.woocommerce .quantity').on('click', '.plus', function (e) {
        			var $inputQty = $(this).parent().find('input.qty');
        			var val = parseInt($inputQty.val());
        			var step = $inputQty.attr('step');
        			step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
        			$inputQty.val(val + step).change();
        		});
        	});
        </script>
        <script type="text/javascript">
        	var c = document.body.className;
        	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        	document.body.className = c;
        </script>
        <script type="text/javascript">
        	var wc_product_block_data = JSON.parse( decodeURIComponent( '%7B%22min_columns%22%3A1%2C%22max_columns%22%3A6%2C%22default_columns%22%3A3%2C%22min_rows%22%3A1%2C%22max_rows%22%3A6%2C%22default_rows%22%3A1%2C%22thumbnail_size%22%3A300%2C%22placeholderImgSrc%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder.png%22%2C%22min_height%22%3A500%2C%22default_height%22%3A500%2C%22isLargeCatalog%22%3Afalse%2C%22productCategories%22%3A%5B%7B%22term_id%22%3A252%2C%22name%22%3A%22Uncategorized%22%2C%22slug%22%3A%22uncategorized%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A252%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A0%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Funcategorized%5C%2F%22%7D%2C%7B%22term_id%22%3A256%2C%22name%22%3A%22Accessories%22%2C%22slug%22%3A%22accessories%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A256%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A253%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Fclothing%5C%2Faccessories%5C%2F%22%7D%2C%7B%22term_id%22%3A253%2C%22name%22%3A%22Clothing%22%2C%22slug%22%3A%22clothing%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A253%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A14%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Fclothing%5C%2F%22%7D%2C%7B%22term_id%22%3A258%2C%22name%22%3A%22Decor%22%2C%22slug%22%3A%22decor%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A258%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A1%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Fdecor%5C%2F%22%7D%2C%7B%22term_id%22%3A255%2C%22name%22%3A%22Hoodies%22%2C%22slug%22%3A%22hoodies%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A255%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A253%2C%22count%22%3A3%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Fclothing%5C%2Fhoodies%5C%2F%22%7D%2C%7B%22term_id%22%3A257%2C%22name%22%3A%22Music%22%2C%22slug%22%3A%22music%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A257%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A0%2C%22count%22%3A2%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Fmusic%5C%2F%22%7D%2C%7B%22term_id%22%3A254%2C%22name%22%3A%22Tshirts%22%2C%22slug%22%3A%22tshirts%22%2C%22term_group%22%3A0%2C%22term_taxonomy_id%22%3A254%2C%22taxonomy%22%3A%22product_cat%22%2C%22description%22%3A%22%22%2C%22parent%22%3A253%2C%22count%22%3A5%2C%22filter%22%3A%22raw%22%2C%22link%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2Fproduct-category%5C%2Fclothing%5C%2Ftshirts%5C%2F%22%7D%5D%2C%22homeUrl%22%3A%22http%3A%5C%2F%5C%2Fdemo.mangabooth.com%5C%2F%22%7D' ) );
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/vendor/lodash.min6a5b.js?ver=4.17.11'></script>
        <script type='text/javascript'>
        	window.lodash = _.noConflict();
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/vendor/moment.mind4d7.js?ver=2.22.2'></script>
        <script type='text/javascript'>
        	moment.locale( 'en_US', {"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"weekdays":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"weekdaysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"week":{"dow":1},"longDateFormat":{"LT":"g:i a","LTS":null,"L":null,"LL":"F j, Y","LLL":"F j, Y g:i a","LLLL":null}} );
        </script>
        <script type='text/javascript' src='../wp-includes/js/wp-sanitize.min4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-includes/js/wp-a11y.min4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min823d.js?ver=7.0.0'></script>
        <script type='text/javascript'>
        	( 'fetch' in window ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-fetch.min6e0e.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-node-contains.minef84.js?ver=3.26.0-0"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-formdata.mine9bd.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="../wp-includes/js/dist/vendor/wp-polyfill-element-closest.min4c56.js?ver=2.0.2"></scr' + 'ipt>' );
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/i18n.min9b70.js?ver=3.3.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/url.min0875.js?ver=2.5.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/hooks.min3601.js?ver=2.2.0'></script>
        <script type='text/javascript'>
        	( function( domain, translations ) {
        		var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        		localeData[""].domain = domain;
        		wp.i18n.setLocaleData( localeData, domain );
        	} )( "default", { "locale_data": { "messages": { "": {} } } } );
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/api-fetch.min0226.js?ver=3.1.2'></script>
        <script type='text/javascript'>
        	( function() {
        		var nonceMiddleware = wp.apiFetch.createNonceMiddleware( "8cf5518069" );
        		wp.apiFetch.use( nonceMiddleware );
        		wp.hooks.addAction(
        			"heartbeat.tick",
        			"core/api-fetch/create-nonce-middleware",
        			function( response ) {
        				if ( response[ "rest_nonce" ] ) {
        					nonceMiddleware.nonce = response[ "rest_nonce" ];
        				}
        			}
        			);
        	} )();
        	wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "../wp-json/index.php" ) );
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/vendor/react.mindecf.js?ver=16.8.4'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/vendor/react-dom.mindecf.js?ver=16.8.4'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/escape-html.min7359.js?ver=1.2.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/element.mina1ec.js?ver=2.3.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/is-shallow-equal.min7359.js?ver=1.2.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/compose.min55a0.js?ver=3.2.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/dom.min5bf8.js?ver=2.2.5'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/html-entities.min3601.js?ver=2.2.0'></script>
        <script type='text/javascript'>
        	( function( domain, translations ) {
        		var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        		localeData[""].domain = domain;
        		wp.i18n.setLocaleData( localeData, domain );
        	} )( "default", { "locale_data": { "messages": { "": {} } } } );
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/keycodes.min3601.js?ver=2.2.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/priority-queue.minf488.js?ver=1.1.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/redux-routine.min55a0.js?ver=3.2.0'></script>
        <script type='text/javascript' src='../wp-includes/js/dist/data.min474a.js?ver=4.4.0'></script>
        <script type='text/javascript'>
        	( function() {
        		var userId = 0;
        		var storageKey = "WP_DATA_USER_" + userId;
        		wp.data
        		.use( wp.data.plugins.persistence, { storageKey: storageKey } )
        		.use( wp.data.plugins.controls );
        		wp.data.plugins.persistence.__unstableMigrate( { storageKey: storageKey } );
        	} )();
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/rich-text.mine5ca.js?ver=3.2.3'></script>
        <script type='text/javascript'>
        	( function( domain, translations ) {
        		var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        		localeData[""].domain = domain;
        		wp.i18n.setLocaleData( localeData, domain );
        	} )( "default", { "locale_data": { "messages": { "": {} } } } );
        </script>
        <script type='text/javascript' src='../wp-includes/js/dist/components.min3af2.js?ver=7.3.2'></script>
        <script type='text/javascript' src='../wp-content/plugins/woo-gutenberg-products-block/build/vendors77e6.js?ver=2.2.1'></script>
        <script type='text/javascript'>
        	( function( domain, translations ) {
        		var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        		localeData[""].domain = domain;
        		wp.i18n.setLocaleData( localeData, domain );
        	} )( "woo-gutenberg-products-block", { "locale_data": { "messages": { "": {} } } } );
        </script>
        <script type='text/javascript' src='../wp-content/plugins/woo-gutenberg-products-block/build/frontend77e6.js?ver=2.2.1'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var embedVars = {"disqusConfig":{"integration":"wordpress 3.0.12"},"disqusIdentifier":"454 http:\/\/demo.mangabooth.com\/?post_type=wp-manga&p=454","disqusShortname":"madara-1","disqusTitle":"Manga Text Chapter","disqusUrl":"http:\/\/demo.mangabooth.com\/manga\/manga-text-chapter\/","postId":"454"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/plugins/disqus-comment-system/public/js/comment_embed4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.mangabooth.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min3ab2.js?ver=3.6.5'></script>
        <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min3ab2.js?ver=3.6.5'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_df05cd485b217b61c8c2d2efbd7ebb6b","fragment_name":"wc_fragments_df05cd485b217b61c8c2d2efbd7ebb6b","request_timeout":"5000"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min3ab2.js?ver=3.6.5'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/core4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/smoothscroll47a7.js?ver=1.4.5'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/lazysizes/lazysizes.min5d0a.js?ver=2.0.7'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/bootstrap.min5b31.js?ver=4.3.1'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/shuffle.min4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-includes/js/imagesloaded.min55a0.js?ver=3.2.0'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/aos4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var madara = {"ajaxurl":"http:\/\/demo.mangabooth.com\/wp-admin\/admin-ajax.php","query_vars":{"post_type":"wp-manga","error":"","m":"","p":0,"post_parent":"","subpost":"","subpost_id":"","attachment":"","attachment_id":0,"name":"","pagename":"","page_id":0,"second":"","minute":"","hour":"","day":0,"monthnum":0,"year":0,"w":0,"category_name":"","tag":"","cat":"","tag_id":"","author":"","author_name":"","feed":"","tb":"","paged":0,"meta_key":"","meta_value":"","preview":"","s":"","sentence":"","title":"","fields":"","menu_order":"","embed":"","category__in":[],"category__not_in":[],"category__and":[],"post__in":[],"post__not_in":[],"post_name__in":[],"tag__in":[],"tag__not_in":[],"tag__and":[],"tag_slug__in":[],"tag_slug__and":[],"post_parent__in":[],"post_parent__not_in":[],"author__in":[],"author__not_in":[],"ignore_sticky_posts":false,"suppress_filters":false,"cache_results":true,"update_post_term_cache":true,"lazy_load_term_meta":true,"update_post_meta_cache":true,"posts_per_page":12,"nopaging":false,"comments_per_page":"50","no_found_rows":false,"order":"DESC"},"current_url":"http:\/\/demo.mangabooth.com\/manga"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/template4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/ajax4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var wpMangaLogin = {"admin_ajax":"http:\/\/demo.mangabooth.com\/wp-admin\/admin-ajax.php","home_url":"http:\/\/demo.mangabooth.com"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/plugins/madara-core/assets/js/login4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-content/plugins/madara-core/assets/slick/slick.min4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var manga = {"ajax_url":"http:\/\/demo.mangabooth.com\/wp-admin\/admin-ajax.php","home_url":"http:\/\/demo.mangabooth.com","manga_paged_var":"manga-paged"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/plugins/madara-core/assets/js/script4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript'>
        	/* <![CDATA[ */
        	var madara_hover_load_post = {"ajax_url":"http:\/\/demo.mangabooth.com\/wp-admin\/admin-ajax.php"};
        	/* ]]> */
        </script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/manga-hover4d2c.js?ver=5.2.4'></script>
        <script type='text/javascript' src='../wp-content/themes/madara/js/slick/slick.min4735.js?ver=1.7.1'></script>
        <script type='text/javascript' src='../wp-content/plugins/madara-shortcodes/shortcodes/js/ct-shortcodes79d5.js?ver=1.5.2.1'></script>

    </body>
    <!-- Mirrored from demo.mangabooth.com/manga/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 18:59:08 GMT -->
    </html>