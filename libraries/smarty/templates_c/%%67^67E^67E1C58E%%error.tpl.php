<?php /* Smarty version 2.6.18, created on 2011-04-15 11:29:30
         compiled from error.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>V3DV</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['img_path']; ?>
favicon.ico" />
<!-- cssy -->
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
mainstyles.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo $this->_tpl_vars['style_path']; ?>
typography.css" rel="stylesheet" type="text/css" media="all"/>
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
<div id="wrap" style="width:98%">
	<div id="main_wrapper_style">
		<div style="height: 150px; width: 600px;margin: 0px auto;">
			<div id="window_top">

				<div id="wt_left">
					<div id="wt_right">
						<p id="breadcrumb"><strong>Błąd</strong> :: <a href="<?php echo $this->_tpl_vars['main_path']; ?>
/logout">Panel logowania</a></p>
						<img src="<?php echo $this->_tpl_vars['img_path']; ?>
window_top_right.png" id="tm_r" alt="V3DV" title="V3DV" />
					</div>
				</div>
			</div>
			<div id="top_menu">

				<div id="tm_left">
					<div id="tm_right">
						<div class="padding">
						</div>
					</div>
				</div>
			</div>
			<div id="window_main">
				<div id="wm_right">

					<div id="wm_lt">
						<div id="wm_rt">
							<div id="window_pad">
								<div class="padding">
									<div style="height: 300px;">
				                    <?php if (isset ( $this->_tpl_vars['errors']['error_msg'] )): ?>
					                    <?php $_from = $this->_tpl_vars['errors']['error_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
											<p></p><div class="login_error" style="font-size: 14px;"><?php echo $this->_tpl_vars['i']; ?>
</div></p>
										<?php endforeach; endif; unset($_from); ?>
				                    <?php endif; ?>
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
		<div id="bot_wrapper" style="position:absolute;bottom: 10px;">

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

