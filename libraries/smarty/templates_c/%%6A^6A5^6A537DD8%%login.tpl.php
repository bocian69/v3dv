<?php /* Smarty version 2.6.18, created on 2011-04-15 16:43:49
         compiled from login.tpl */ ?>
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
		<div style="height: 450px; width: 400px;margin: 0px auto;">
			<div id="window_top">

				<div id="wt_left">
					<div id="wt_right">
						<p id="breadcrumb">V3DV <strong><a href="">Połączenie z bazą</a></strong></p>
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
										<form action="<?php echo $this->_tpl_vars['main_path']; ?>
/index" method="post"><div style="margin:0;padding:0"></div>
                    <?php if (isset ( $this->_tpl_vars['errors']['error_msg'] )): ?>
	                    <?php $_from = $this->_tpl_vars['errors']['error_msg']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
							<div class="login_error"><?php echo $this->_tpl_vars['i']; ?>
</div>
						<?php endforeach; endif; unset($_from); ?>
                    <?php endif; ?>
										<fieldset>
											<legend>Połączenie z bazą</legend>


											<table cellpadding="0" cellspacing="0" border="0" style="width: 100%;">
												<tr>
													<td>
														<p><label for="input_host">Host: </label><input class="text" id="input_host" name="host" type="text">
														<?php if (isset ( $this->_tpl_vars['errors']['input_host'] )): ?>
															<span class="login_error"><?php echo $this->_tpl_vars['errors']['input_host']; ?>
</span>
									                    <?php endif; ?>
									                    </p>
													</td>
												</tr>
												<tr>
													<td>
														<p><label for="input_port">Port: </label><input class="text" id="input_port" name="port" type="text">
														<?php if (isset ( $this->_tpl_vars['errors']['input_port'] )): ?>
															<span class="login_error"><?php echo $this->_tpl_vars['errors']['input_port']; ?>
</span>
									                    <?php endif; ?>
									                    </p>
													</td>
												</tr>
												<tr>
													<td>
														<p><label for="input_login">Login: </label> <input class="text" id="input_login" name="login" type="text">
														<?php if (isset ( $this->_tpl_vars['errors']['input_login'] )): ?>
															<span class="login_error"><?php echo $this->_tpl_vars['errors']['input_login']; ?>
</span>
									                    <?php endif; ?>
									                    </p>
													</td>
												</tr>
												<tr>
													<td>
														<p><label for="input_passwd">Hasło: </label><input class="text" id="input_passwd" name="haslo" type="password"></p>
													</td>
												</tr>
												<tr>
													<td>
														<p><label for="input_db">Baza: </label><input class="text" id="input_db" name="db" type="text">
														<?php if (isset ( $this->_tpl_vars['errors']['input_db'] )): ?>
															<span class="login_error"><?php echo $this->_tpl_vars['errors']['input_db']; ?>
</span>
									                    <?php endif; ?>
									                    </p>
													</td>
												</tr>
												<tr>
													<td>
														<p><label for="select_dbtype">Typ bazy: </label>
														<select id="select_dbtype" name="dbtype">
														<option value="mysql">MySql</option>
														<option value="postgres">Postgres</option>
														</select>
														<?php if (isset ( $this->_tpl_vars['errors']['select_dbtype'] )): ?>
															<span class="login_error"><?php echo $this->_tpl_vars['errors']['select_dbtype']; ?>
</span>
									                    <?php endif; ?>
									                    </p>
													</td>
												</tr>
											</table>
											<p style="text-align: center">
												<button name="submit" value="submit" type="submit"><img src="<?php echo $this->_tpl_vars['img_path']; ?>
button_ok.png" alt="Ok" /> Połącz</button>
											</p>
										</fieldset>
										</form>

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

