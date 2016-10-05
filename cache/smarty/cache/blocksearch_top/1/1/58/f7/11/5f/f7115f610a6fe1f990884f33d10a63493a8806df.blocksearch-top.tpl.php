<?php /*%%SmartyHeaderCode:903057f2fe5a2cbe14-19831155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7115f610a6fe1f990884f33d10a63493a8806df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\33cards\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1466013674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '903057f2fe5a2cbe14-19831155',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57f2fe5a37f944_70727102',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f2fe5a37f944_70727102')) {function content_57f2fe5a37f944_70727102($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/33cards/procurar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Busca" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Busca</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
