<?php /* Smarty version 2.6.11, created on 2014-09-27 09:28:56
         compiled from modules/Prospects/tpls/QuickCreate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'modules/Prospects/tpls/QuickCreate.tpl', 80, false),)), $this); ?>
{*
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

*}
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module) || !empty($smarty.request.relate_to)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
<?php if (isset ( $this->_tpl_vars['form']['hidden'] )):  $_from = $this->_tpl_vars['form']['hidden']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
 echo $this->_tpl_vars['field']; ?>
   
<?php endforeach; endif; unset($_from);  endif; ?>

{* -- Begin QuickCreate Specific -- *}
{if $smarty.request.action != 'SubpanelEdits'}
<input type="hidden" name="primary_address_street" value="{$smarty.request.primary_address_street}">
<input type="hidden" name="primary_address_city" value="{$smarty.request.primary_address_city}">
<input type="hidden" name="primary_address_state" value="{$smarty.request.primary_address_state}">
<input type="hidden" name="primary_address_country" value="{$smarty.request.primary_address_country}">
<input type="hidden" name="primary_address_postalcode" value="{$smarty.request.primary_address_postalcode}">
{/if}
<input type="hidden" name="is_ajax_call" value="1">
<input type="hidden" name="to_pdf" value="1">
{* -- End QuickCreate Specific -- *}

<?php if (empty ( $this->_tpl_vars['form']['button_location'] ) || $this->_tpl_vars['form']['button_location'] == 'top'):  if (! empty ( $this->_tpl_vars['form'] ) && ! empty ( $this->_tpl_vars['form']['buttons'] )): ?>
   <?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
      <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'view' => ($this->_tpl_vars['view'])), $this);?>

   <?php endforeach; endif; unset($_from);  else:  echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'SAVE','view' => ($this->_tpl_vars['view'])), $this);?>

<?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'CANCEL','view' => ($this->_tpl_vars['view'])), $this);?>

<?php endif;  if (empty ( $this->_tpl_vars['form']['hideAudit'] ) || ! $this->_tpl_vars['form']['hideAudit']):  echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => 'Audit','view' => ($this->_tpl_vars['view'])), $this);?>

<?php endif;  endif; ?>
</td>
<td align='right'><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>
</td>
</tr>
</table>