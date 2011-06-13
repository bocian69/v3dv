<?php /* Smarty version 2.6.18, created on 2011-03-27 08:58:13
         compiled from index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>mplusp</title>
		<meta name="robots" content="all" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta http-equiv="content-language" content="pl" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['site_url']; ?>
/css/main.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['site_url']; ?>
/css/MenuMatic.css" media="all" />
		<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['site_url']; ?>
/css/ie6.css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['site_url']; ?>
/css/MenuMatic-ie6.css" media="all" />
		<![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['site_url']; ?>
/css/ie7.css" media="all" /><![endif]-->
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_url']; ?>
/js/mootools-1.2.1-core-nc.js"></script>
		<script src="<?php echo $this->_tpl_vars['site_url']; ?>
/js/MenuMatic_0.68.3.js" type="text/javascript" charset="utf-8"></script>
		<?php echo '
		<script type="text/javascript" >
			window.addEvent(\'domready\', function() {			
				var myMenu = new MenuMatic({ orientation:\'vertical\' });			
			});
		</script>
		'; ?>

	</head>
	<body>
		<div id="main">
			<ul id="top_bar">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/oneLvlMenu_top.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>			
				<li><a href="<?php echo $this->_tpl_vars['site_url']; ?>
/pl/" title="Wersja polska"><img src="<?php echo $this->_tpl_vars['main_path']; ?>
/img/flag_pl.jpg" alt="Wersja polska" /></a></li>
				<li><a href="<?php echo $this->_tpl_vars['site_url']; ?>
/en/" title="English version"><img src="<?php echo $this->_tpl_vars['main_path']; ?>
/img/flag_uk.jpg" alt="English version" /></a></li>
				<li><a href="<?php echo $this->_tpl_vars['site_url']; ?>
/ro/" title="Limba engleza"><img src="<?php echo $this->_tpl_vars['main_path']; ?>
/img/flag_ro.jpg" alt="Limba engleza" /></a></li>
				
			</ul>
			<div id="top_content">
				<h1><a href="<?php echo $this->_tpl_vars['lang_path']; ?>
/"><img src="<?php echo $this->_tpl_vars['main_path']; ?>
/img/logo.jpg" alt="mplusp" id="logo" /></a></h1>
				<div id="space">
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/MainMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>					
				</div>
				<?php if (isset ( $this->_tpl_vars['client_authorized'] )): ?>
				<div style="display: block;	padding-left: 70px;" id="client-auth">
				<?php echo $this->_tpl_vars['client_authorized']; ?>

				</div>
				<?php else: ?>
				<form method="post" action="<?php echo $this->_tpl_vars['lang_path']; ?>
/page/,Client,login" id="login">
					<div>
						<input type="text" name="email" value="<?php echo $this->_config[0]['vars']['email_address']; ?>
" class="text" onfocus="if(this.value=='<?php echo $this->_config[0]['vars']['email_address']; ?>
')this.value='';" onblur="if(this.value=='')this.value='<?php echo $this->_config[0]['vars']['email_address']; ?>
';" />
						<input type="password" name="password" value="<?php echo $this->_config[0]['vars']['password']; ?>
" class="text" onfocus="if(this.value=='<?php echo $this->_config[0]['vars']['password']; ?>
')this.value='';" onblur="if(this.value=='')this.value='<?php echo $this->_config[0]['vars']['password']; ?>
';" />
						<input type="image" src="<?php echo $this->_tpl_vars['main_path']; ?>
/img/button.gif" />
					</div>
					<div>
						<a href="<?php echo $this->_tpl_vars['lang_path']; ?>
/page/,Registration"><?php echo $this->_config[0]['vars']['sign_in']; ?>
</a>
						<a href="<?php echo $this->_tpl_vars['lang_path']; ?>
/page/,Client,lostPassword"><?php echo $this->_config[0]['vars']['forgot_password']; ?>
</a>
					</div>
				</form>
				<?php endif; ?>
			</div>
			<div id="middle">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/pathCreator.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<div id="left">
					<ul>
						<?php if (isset ( $this->_tpl_vars['clientMenu'] )): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/clientMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php else: ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/oneLvlMenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endif; ?>
					</ul>
				</div>
				<?php if (isset ( $this->_tpl_vars['template'] ) == false): ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/404.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/".($this->_tpl_vars['template']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> <?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/right_col.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			<div class="clear"></div>
			<div id="bottom">
				<ul>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "front/oneLvlMenu_bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<li><a href="<?php echo $this->_tpl_vars['lang_path']; ?>
/page/,MapaSerwisu"><?php echo $this->_config[0]['vars']['site_map']; ?>
</a></li>
				</ul>
				<p>
					Copyright &#169; 2011
					<br />
					V3DV
				</p>
				<div class="clear"></div>
			</div>
		</div>
	</body>
</html>