<?php /* Smarty version Smarty-3.1.19, created on 2016-10-04 02:45:49
         compiled from "C:\xampp\htdocs\33cards\themes\default-bootstrap\modules\cheque\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2443457f2fbbdc2d827-78217432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445dc7414f10b4ce2479991ddd214b6eadc45483' => 
    array (
      0 => 'C:\\xampp\\htdocs\\33cards\\themes\\default-bootstrap\\modules\\cheque\\views\\templates\\hook\\infos.tpl',
      1 => 1466013674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2443457f2fbbdc2d827-78217432',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f2fbbdc410a5_67151758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f2fbbdc410a5_67151758')) {function content_57f2fbbdc410a5_67151758($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
