<?php /* Smarty version 2.6.18, created on 2011-04-14 16:34:26
         compiled from toolbar.tpl */ ?>
<ul>
	<?php $_from = $this->_tpl_vars['toolbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
	    <li <?php if (isset ( $this->_tpl_vars['i']['class'] ) == true): ?>class="<?php echo $this->_tpl_vars['i']['class']; ?>
"<?php endif; ?>>
	    	<?php if (isset ( $this->_tpl_vars['i']['link'] ) == true): ?><a href="<?php echo $this->_tpl_vars['i']['link']['href']; ?>
" id="<?php echo $this->_tpl_vars['i']['link']['id']; ?>
" class="<?php echo $this->_tpl_vars['i']['link']['class']; ?>
"><?php endif; ?>
	    	<?php if (isset ( $this->_tpl_vars['i']['text'] ) == true): ?><?php echo $this->_tpl_vars['i']['text']; ?>
<?php endif; ?>
	    	<?php if (isset ( $this->_tpl_vars['i']['img'] ) == true): ?><span><img src="<?php echo $this->_tpl_vars['i']['img']['src']; ?>
" title="<?php echo $this->_tpl_vars['i']['img']['title']; ?>
" alt="<?php echo $this->_tpl_vars['i']['img']['alt']; ?>
" /></span><?php endif; ?>
	    	<?php if (isset ( $this->_tpl_vars['i']['label'] ) == true): ?><span class="label"><?php echo $this->_tpl_vars['i']['label']; ?>
</span><?php endif; ?>
	    	<?php if (isset ( $this->_tpl_vars['i']['link'] ) == true): ?></a><?php endif; ?>
	    </li>
	<?php endforeach; endif; unset($_from); ?>
</ul>