<?php /* Smarty version 2.6.18, created on 2011-03-31 17:05:33
         compiled from Administrator.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Panel Administracyjny</title>
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

<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
advajax.js"></script>
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
<?php if ($this->_tpl_vars['inc'] == 'menu'): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/jquery-1.1.4.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/jquery.dimensions.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
interface/interface.js"></script>
<style type="text/css" media="screen">@import "<?php echo $this->_tpl_vars['style_path']; ?>
jquery.nestedsortablewidget.css";</style>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/nestedSortable/json.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/nestedSortable/inestedsortable.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/nestedSortable/jquery.nestedsortablewidget.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
menu.js"></script>
<?php echo '
<script type="text/javascript">
$(document).ready(
  	function()
  	{
		$(\'#sel_menu\').change(function(){
			if (this.selectedIndex != 0) {
				jQuery(\'.tip_box\').hide();
				selectedMenu = $(this).val();
				menuInit(selectedMenu);
			}
		});
		if (selectedMenu != "") {
			jQuery(\'.tip_box\').hide();
			menuInit(selectedMenu);
		}
  	}
);
</script>
'; ?>

<?php else: ?>
	<?php if (isset ( $this->_tpl_vars['mootools'] ) == true): ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
mootools.js" charset="utf-8"></script>
	<?php else: ?>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/jquery-1.2.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/ui.datepicker.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/ui.datepicker-pl.js"></script>
	<link href="<?php echo $this->_tpl_vars['style_path']; ?>
thickbox.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
jquery/plugins/thickbox.js"></script>
	<link href="<?php echo $this->_tpl_vars['style_path']; ?>
ui.datepicker.css" rel="stylesheet" type="text/css" />
	<?php endif; ?>
<?php endif; ?>
<script type="text/javascript" language="javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
fx_styles.js"></script>
<?php if (isset ( $this->_tpl_vars['tinymce'] )): ?>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['main_path']; ?>
/libraries/tinymce2/tiny_mce.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
tinymce_editor.js"></script>
<?php endif; ?>
<!--[if lte IE 6]>
<script defer type="text/javascript" src="<?php echo $this->_tpl_vars['js_path']; ?>
pngfix.js"></script>
<?php echo '
<style type="text/css">
	.bottom_line_left, .bottom_line_right, #wt_left, #preview_link, #virtueworld, a, li, td, .tip_box, .download_box, .information_box, .warning_box, .note_box, .favorite_box, .service_box, .links_box { behavior: url('; ?>
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
						<p id="breadcrumb">VirtueCMS - Administration Panel: <strong><a href="">Strona główna</a></strong></p>
						<img src="<?php echo $this->_tpl_vars['img_path']; ?>
window_top_right.png" id="tm_r" alt="VirtueCMS - Administration Panel" title="VirtueCMS - Administration Panel" />
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
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['inc']).".tpl", 'smarty_include_vars' => array()));
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
bottom_line_right_bg.png" id="bt_r" alt="VirtueCMS - Administration Panel" title="VirtueCMS - Administration Panel" />
						<div class="bottom_line_left">
							<div class="bottom_line_bg">
								<div id="bottom_nav">
									<img src="<?php echo $this->_tpl_vars['img_path']; ?>
virtuecms.png" alt="VirtueCMS - Administration Panel" title="VirtueCMS - Administration Panel" id="logo" />
									<div id="virtueworld">
										<a href="#" title="Strona firmy VirtueWorld Ltd."><img src="<?php echo $this->_tpl_vars['img_path']; ?>
virtueworld.png" alt="Strona firmy VirtueWorld Ltd." title="Strona firmy VirtueWorld Ltd." style="float: right" /></a>
										<p><a href="#" title="Strona firmy VirtueWorld Ltd.">VirtueWorld</a><br />Strona firmy VirtueWorld Ltd.</p>
									</div>
									<div id="preview_link">
										<a href="<?php echo $this->_tpl_vars['main_path']; ?>
/" title="Podgląd strony" target="_blank"><img src="<?php echo $this->_tpl_vars['img_path']; ?>
preview_ico.png" alt="Podgląd strony" title="Podgląd strony" style="float: right" /></a>
										<p><a href="#" title="Podgląd strony">Podgląd strony</a><br />Opcja otwiera nowe okno</p>
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