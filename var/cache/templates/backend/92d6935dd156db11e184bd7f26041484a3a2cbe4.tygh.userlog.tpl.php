<?php /* Smarty version Smarty-3.1.21, created on 2021-06-14 23:15:33
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\reward_points\views\reward_points\userlog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163888991660c7b8e568ba63-12610311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d6935dd156db11e184bd7f26041484a3a2cbe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\reward_points\\views\\reward_points\\userlog.tpl',
      1 => 1623231400,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '163888991660c7b8e568ba63-12610311',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'search' => 0,
    'userlog' => 0,
    'c_url' => 0,
    'c_icon' => 0,
    'c_dummy' => 0,
    'ul' => 0,
    'settings' => 0,
    'reason' => 0,
    'order_exist' => 0,
    'statuses' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_60c7b8e57f79a1_10421771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60c7b8e57f79a1_10421771')) {function content_60c7b8e57f79a1_10421771($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('date','points','reason','date','points','reason','order','text_points_used_in_order','order','deleted','order','order_placed','tools','no_data','log','customer','points','cleanup_log','general','action','add','subtract','value','reason','notify_customer','change','change_points','add_subtract_points','reward_points_log'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>


<?php $_smarty_tpl->tpl_vars['c_url'] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"), null, 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="userlog_form" class="" enctype="multipart/form-data">
    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_REQUEST['user_id'], ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_url'=>true), 0);?>

    
    <?php $_smarty_tpl->tpl_vars['c_icon'] = new Smarty_variable("<i class=\"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])."\"></i>", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['c_dummy'] = new Smarty_variable("<i class=\"icon-dummy\"></i>", null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['userlog']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("reward_points_table", null, null); ob_start(); ?>
            <div class="table-responsive-wrapper longtap-selection">
                <table class="table table-middle table--relative table-responsive">
                <thead
                    data-ca-bulkedit-default-object="true" 
                    data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th width="6%" class="left mobile-hide">
                            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_check_all_shown'=>true), 0);?>


                            <input type="checkbox"
                                class="bulkedit-toggler hide"
                                data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                                data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th width="14%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=timestamp&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("date");?>
 <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="timestamp") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th width="10%"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {?> sort-link-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=amount&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="pagination_contents"><?php echo $_smarty_tpl->__("points");?>
 <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by']=="amount") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
} else {
echo $_smarty_tpl->tpl_vars['c_dummy']->value;
}?></a></th>
                        <th width="60%"><?php echo $_smarty_tpl->__("reason");?>
</th>
                        <th width="10%">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $_smarty_tpl->tpl_vars["ul"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ul"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ul"]->key => $_smarty_tpl->tpl_vars["ul"]->value) {
$_smarty_tpl->tpl_vars["ul"]->_loop = true;
?>
                    <tr class="cm-longtap-target"
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['change_id'], ENT_QUOTES, 'UTF-8');?>
"
                    >
                        <td width="6%" class="left mobile-hide">
                            <input type="checkbox" name="change_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['change_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide">
                        </td>
                        <td width="14%" data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['ul']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td width="10%" data-th="<?php echo $_smarty_tpl->__("points");?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td width="60%" data-th="<?php echo $_smarty_tpl->__("reason");?>
">
                            <?php if ($_smarty_tpl->tpl_vars['ul']->value['action']==(defined('CHANGE_DUE_ORDER') ? constant('CHANGE_DUE_ORDER') : null)) {?>
                                <?php $_smarty_tpl->tpl_vars["statuses"] = new Smarty_variable(fn_get_simple_statuses((defined('STATUSES_ORDER') ? constant('STATUSES_ORDER') : null),true,true), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['reason']->value['order_id']), null, 0);?>
                                
                                <?php echo $_smarty_tpl->__("order");?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['reason']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php }?><span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['reason']->value['from']], ENT_QUOTES, 'UTF-8');?>
&nbsp;&#8212;&#8250;&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['statuses']->value[$_smarty_tpl->tpl_vars['reason']->value['to']], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['reason']->value['text']) {?>&nbsp;(<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['reason']->value['text']);?>
)<?php }?>
                                
                            <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==(defined('CHANGE_DUE_USE') ? constant('CHANGE_DUE_USE') : null)) {?>
                                <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
                                <?php echo $_smarty_tpl->__("text_points_used_in_order");?>
: <?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['ul']->value['reason'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?><span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['reason'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==(defined('CHANGE_DUE_ORDER_DELETE') ? constant('CHANGE_DUE_ORDER_DELETE') : null)) {?>
                                <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
                                <?php echo $_smarty_tpl->__("order");?>
 <span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span>: <?php echo $_smarty_tpl->__("deleted");?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['ul']->value['action']==(defined('CHANGE_DUE_ORDER_PLACE') ? constant('CHANGE_DUE_ORDER_PLACE') : null)) {?>
                                <?php $_smarty_tpl->tpl_vars["reason"] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['ul']->value['reason']), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["order_exist"] = new Smarty_variable(fn_get_order_name($_smarty_tpl->tpl_vars['reason']->value['order_id']), null, 0);?>
                                <?php echo $_smarty_tpl->__("order");?>
 <?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?><a href="<?php echo htmlspecialchars(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['reason']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
" class="underlined"><?php }?><span>#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reason']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['order_exist']->value) {?></a><?php }?>: <?php echo $_smarty_tpl->__("order_placed");?>

                            <?php } else { ?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"reward_points:userlog")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"reward_points:userlog"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ul']->value['reason'], ENT_QUOTES, 'UTF-8');?>

                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"reward_points:userlog"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php }?>
                        </td>
                        <td width="10%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete",'href'=>"reward_points.delete?user_id=".((string)$_REQUEST['user_id'])."&change_id=".((string)$_smarty_tpl->tpl_vars['ul']->value['change_id']),'class'=>"cm-confirm",'method'=>"POST"));?>
</li>
                                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('form'=>"userlog_form",'object'=>"reward_points",'items'=>Smarty::$_smarty_vars['capture']['reward_points_table'],'is_check_all_shown'=>true), 0);?>

    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</form>



<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <div class="sidebar-row">
    <h6><?php echo $_smarty_tpl->__("log");?>
</h6>
    <ul class="unstyled">
        <li><strong><?php echo $_smarty_tpl->__("customer");?>
:</strong>  <a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <li><strong><?php echo $_smarty_tpl->__("points");?>
:</strong> <?php if ($_smarty_tpl->tpl_vars['user']->value['points']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['points'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?></li>
    </ul>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>



<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['userlog']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"delete",'text'=>$_smarty_tpl->__("cleanup_log"),'class'=>"cm-submit",'dispatch'=>"dispatch[reward_points.cleanup_logs]",'form'=>"userlog_form"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'class'=>"mobile-hide"));?>

    <?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="reward_points_form" enctype="multipart/form-data" class="">
            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($_REQUEST['user_id'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

            <div class="tabs cm-j-tabs">
                <ul class="nav nav-tabs">
                    <li id="tab_general" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                </ul>
            </div>

            <div class="cm-tabs-content" id="content_tab_general">
                <fieldset class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label"><?php echo $_smarty_tpl->__("action");?>
:</label>
                        <div class="controls">
                            <label for="reason_action_A" class="radio inline">
                                <input type="radio" name="reason[action]" id="reason_action_A" value="A" checked="checked">
                                <?php echo $_smarty_tpl->__("add");?>

                            </label>
                            <label for="reason_action_S" class="radio inline">
                                <input type="radio" name="reason[action]" id="reason_action_S" value="S">
                                <?php echo $_smarty_tpl->__("subtract");?>

                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="reason_amount" class="cm-required control-label"><?php echo $_smarty_tpl->__("value");?>
:</label>
                        <div class="controls">
                            <input type="text" value="" name="reason[amount]" id="reason_amount" class="input-text" size="5" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label" for="reason_reason"><?php echo $_smarty_tpl->__("reason");?>
:</label>
                        <div class="controls">
                            <textarea name="reason[reason]" id="reason_reason" cols="55" rows="8" class="input-textarea-long"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label" for="notify_user"><?php echo $_smarty_tpl->__("notify_customer");?>
:</label>
                        <div class="controls">
                            <input type="checkbox" name="notify_user" value="Y" checked="checked" id="notify_user" />
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="buttons-container">
                <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[reward_points.change_points]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("change")), 0);?>

            </div>
        </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"change_points",'text'=>$_smarty_tpl->__("change_points"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>$_smarty_tpl->__("add_subtract_points"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("reward_points_log"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons']), 0);?>

<?php }} ?>
