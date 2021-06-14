<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 22:42:59
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\merkle_loyalty_system\views\loyalty\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101096582860c7b143d30e90-19383729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6badb25a65b58153aaf8a5c2139e6c45898f74bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\merkle_loyalty_system\\views\\loyalty\\manage.tpl',
      1 => 1623699774,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '101096582860c7b143d30e90-19383729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'value' => 0,
    'points' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7b143d4eea0_57124199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7b143d4eea0_57124199')) {function content_60c7b143d4eea0_57124199($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>

    <div class="card" style="width: 500px; height: 150px">
        <div class="card-body" style="text-align:center">
            <h4 class="card-title" >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['points'], ENT_QUOTES, 'UTF-8');?>
)
                <h4><button style="height: 100%;width:50%;background:white;border:blanchedalmond" onclick="$('#frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points').toggle();">
                    Insert Points
                </button></h4>
                <form id="frm<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
points" method="POST" action="admin.php?dispatch=loyalty.manage" class="hidden">
                    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                   
                    <input type="number" name="points"/>
                    <input type="submit" value="OK"/> 
                </form>
            </h4>
            <h5 class="card-text" ref="admin.php?dispatch=loyalty.update&id_user=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
">
                <?php if (count($_smarty_tpl->tpl_vars['value']->value['pontos'])>0) {?>
                
                    <?php  $_smarty_tpl->tpl_vars['points'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['points']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value['pontos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['points']->key => $_smarty_tpl->tpl_vars['points']->value) {
$_smarty_tpl->tpl_vars['points']->_loop = true;
?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['data'], ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['points']->value['points'], ENT_QUOTES, 'UTF-8');?>

                        <br>      
                    <?php } ?>
                
            <?php }?>
            </h5>
        </div>
    </div>

<?php } ?><?php }} ?>
