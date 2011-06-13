<?php /* Smarty version 2.6.18, created on 2011-06-06 18:29:26
         compiled from MainAplication.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>V3DV</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
mainstyles.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
typography.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
columns.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
topmenu.css" rel="stylesheet" type="text/css" media="screen, tv, projection"/>
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
aplication_content.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
ui-darkness/jquery-ui-1.8.11.custom.css" rel="stylesheet" type="text/css" media="all"/>


<!--<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/jquery-1.5.2.min.js"></script>-->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery-1.4.2svg.min.js"></script><!-- svg modified -->
<!--<script type="text/javascript" src="js/jquery_ui/js/jquery-ui-1.8.11.custom.min.js"></script>-->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery.svg.js"></script>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
fancybox/jquery.fancybox-1.3.4.js"></script>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['js_path']; ?>
fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<script type="text/javascript">
var MainPath = "<?php echo $this->_tpl_vars['main_path']; ?>
";
var ImgPath = "<?php echo $this->_tpl_vars['img_path']; ?>
";
var StylePath = "<?php echo $this->_tpl_vars['style_path']; ?>
";
var selectedMenu = "<?php echo $this->_tpl_vars['selectedMenu']; ?>
";
</script>
<?php echo '
<script type="text/javascript">
$(document).ready(
  	function(){
  	}
);
</script>
'; ?>

<script type="text/javascript" language="javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
fx_styles.js"></script>
<!--[if lte IE 6]>
<script defer type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
pngfix.js"></script>
<?php echo '
<style type="text/css">
	.bottom_line_left, .bottom_line_right, #wt_left, #preview_link, #v3dv, a, li, td, .tip_box, .download_box, .information_box, .warning_box, .note_box, .favorite_box, .service_box, .links_box { behavior: url('; ?>
<?php echo $this->_tpl_vars['style_path']; ?>
<?php echo 'iepngfix.htc) }
</style>
<style type="text/css">
	.bottom_line_bg { filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true, sizingMethod=scale, src=\''; ?>
<?php echo $this->_tpl_vars['img_path']; ?>
<?php echo 'bottom_line_bg.png\'); }
	.tip_box, .download_box, .information_box, .warning_box, .note_box, .favorite_box, .service_box, .links_box { width: 90%; }
</style>
<link href="'; ?>
<?php echo $this->_tpl_vars['style_path']; ?>
<?php echo 'ie6tm.css" rel="stylesheet" type="text/css" media="screen, tv, projection"/>
<script type="text/javascript" src="'; ?>
<?php echo $this->_tpl_vars['js_path']; ?>
<?php echo 'ADxMenu.js"></script>
<![endif]-->
<!--[if lte IE 7]>
<style type="text/css">
#wrap_style {
	background: none;
}
</style>
<![endif]-->
'; ?>

</head>
<body>
<div id="wrap_style">
<div id="wrap">
	<div id="main_wrapper_style">
		<div style="height: 100%;">
			<div id="window_top">
				<div id="wt_left">
					<div id="wt_right">
						<p id="breadcrumb" style="text-align: center;"><strong>Visiual Drag & Drop Database Viewer v 1.0</strong></p>
						<img src="<?php echo $this->_tpl_vars['img_path']; ?>
window_top_right.png" id="tm_r" alt="V3DV" title="V3DV" />
					</div>
				</div>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "top_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<div id="window_main">
				<div id="wm_right">
					<div id="wm_lt">
						<div id="wm_rt">
							<div id="window_pad">
								<div class="padding">

									<div class="toolbar">

									<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "toolbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

									</div>

									<div class="special_cols">
										<div class="right">

											<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "AplicationContent.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

										<div class="both"><!-- --></div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="window_bottom">
				<div id="wb_left">
					<div id="wb_right">
					<!-- -->
					</div>
				</div>
			</div>
		</div>

		<div id="main_separator"><!-- --></div>

		<div id="bot_wrapper">
			<div id="bot_content">
				<div id="bottom_line">
					<div id="bot_nav">
						<img src="<?php echo $this->_tpl_vars['img_path']; ?>
bottom_line_right_bg.png" id="bt_r" />
						<div class="bottom_line_left">
							<div class="bottom_line_bg">
								<div id="bottom_nav">
									<div id="logo">Nasze logo</div>
									<div id="v3dv">
										<p><a href="http://www.freq.pl/trac/v3dv" title="Strona projektu V3DV"  target="_blank">V3DV</a><br />Strona projektu V3DV</p>
									</div>
									<div class="both"><!-- --></div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="both"><!-- --></div>
</body>

</html>