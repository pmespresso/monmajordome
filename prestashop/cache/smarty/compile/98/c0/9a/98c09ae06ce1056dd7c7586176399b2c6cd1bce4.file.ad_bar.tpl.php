<?php /* Smarty version Smarty-3.1.19, created on 2015-07-10 18:08:02
         compiled from "/Users/YJ/Downloads/prestashop_1.6.1.0/prestashop/admin/themes/default/template/controllers/modules/ad_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:662607667559fede2b0d924-92682122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c09ae06ce1056dd7c7586176399b2c6cd1bce4' => 
    array (
      0 => '/Users/YJ/Downloads/prestashop_1.6.1.0/prestashop/admin/themes/default/template/controllers/modules/ad_bar.tpl',
      1 => 1436343200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '662607667559fede2b0d924-92682122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_modules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_559fede2b35488_10948296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559fede2b35488_10948296')) {function content_559fede2b35488_10948296($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/YJ/Downloads/prestashop_1.6.1.0/prestashop/tools/smarty/plugins/function.cycle.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['ad_modules']->value['not_installed'])) {?>
<div class="bootstrap panel">
	<h3><i class="icon-certificate"></i> <?php echo smartyTranslate(array('s'=>'You might be interested in'),$_smarty_tpl);?>
</h3>
	<div class="row">
		<table id="tab_modules_list_not_installed" class="table">
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad_modules']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp2), 0);?>

			<?php } ?>
		</table>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }?>

<?php }} ?>
