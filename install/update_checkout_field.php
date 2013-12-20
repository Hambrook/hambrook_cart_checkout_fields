<?php
/**
 * Copyright 2013 Rick Hambrook <rick@hambrook.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Rick Hambrook <rick@hambrook.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.hambrook.co.nz Hambrook Web Design
 * @package hambrook_cart_checkout_fields
 * @usage   This plugin was created for JojoCMS http://www.jojocms.org/
 */

$table = 'cart_checkoutfee';
$o = 1;

$default_td[$table]['td_displayfield']     = 'cf_title';
$default_td[$table]['td_rolloverfield']    = '';
$default_td[$table]['td_orderbyfields']    = 'cf_order, cf_title';
$default_td[$table]['td_topsubmit']        = 'yes';
$default_td[$table]['td_deleteoption']     = 'yes';
$default_td[$table]['td_menutype']         = 'list';
$default_td[$table]['td_categoryfield']    = '';
$default_td[$table]['td_categorytable']    = '';
$default_td[$table]['td_help']             = '';


/* status */
$field = 'cf_status';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Status';
$default_fd[$table][$field]['fd_type']     = 'radio';
$default_fd[$table][$field]['fd_options']  = "active:Active\ninactive:Inactive";
$default_fd[$table][$field]['fd_default']  = 'active';
$default_fd[$table][$field]['fd_help']     = 'Inactive items will not show';

/* ID */
$field = 'checkoutfieldid';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'hidden';
$default_fd[$table][$field]['fd_help']     = 'A unique ID, automatically assigned by the system';

/* Title */
$field = 'cf_title';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'text';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '50';
$default_fd[$table][$field]['fd_help']     = '';

/* Desciption */
$field = 'cf_desc';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'textarea';
$default_fd[$table][$field]['fd_required'] = 'no';
$default_fd[$table][$field]['fd_help']     = '';
$default_fd[$table][$field]['fd_rows']     = '6';
$default_fd[$table][$field]['fd_cols']     = '50';

/* Price */
$field = 'cf_price';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_type']     = 'decimal';
$default_fd[$table][$field]['fd_required'] = 'yes';
$default_fd[$table][$field]['fd_size']     = '20';
$default_fd[$table][$field]['fd_help']     = '';

/* Order */
$field = 'cf_order';
$default_fd[$table][$field]['fd_order']    = $o++;
$default_fd[$table][$field]['fd_name']     = 'Display Order';
$default_fd[$table][$field]['fd_type']     = 'order';
$default_fd[$table][$field]['fd_default']  = '';
$default_fd[$table][$field]['fd_help']     = 'Customize the display order.';