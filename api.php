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
 
/**
 * TODO
 *  - Support for checkboxes (required?)
 *  - Support for selectbox and text box (referrer)
 *  - Support for textarea?
 */
 
 $classname = "hambrook_cart_checkout_fields";

Jojo::addFilter('jojo_cart:getFreight:total',            'set_shipping',                  $classname);
Jojo::addFilter('jojo_cart_checkout:get_fields',         'add_fields_to_fields',          $classname);
Jojo::addFilter('jojo_cart_checkout:required_fields',    'add_fields_to_required_fields', $classname);
Jojo::addHook('jojo_cart_extra_fields_shipping',         array($classname,                'add_fields_to_form_shipping'));
Jojo::addHook('jojo_cart_extra_fields_details_shipping', array($classname,                'add_fields_to_details_shipping'));
Jojo::addHook('jojo_cart_extra_fields_email_shipping',   array($classname,                'add_fields_to_email_shipping'));
//Jojo::addHook('jojo_cart_transaction_report_th',       array($classname,                'add_fields_to_translist_th'));
//Jojo::addHook('jojo_cart_transaction_report_td',       array($classname,                'add_fields_to_translist_td'));
Jojo::addHook('jojo_cart_transaction_list_bottom',       array($classname,                'add_fields_to_translist_bottom'));

/* Options */

$_options[] = array(
    'id'          => 'hambrook_checkoutfields_heading_fees',
    'category'    => 'Cart - Extra Checkout Fields',
    'label'       => 'Fees Heading',
    'description' => 'The heading shown above the Fees section in Checkout.',
    'type'        => 'text',
    'default'     => 'Shipping Extras',
    'options'     => '',
    'plugin'      => $classname
);

/*
// Referrer
$_options[] = array(
    'id'          => 'hambrook_checkoutfields_referrer',
    'category'    => 'Cart - Extra Checkout Fields',
    'label'       => 'Rural Delivery Surcharge',
    'description' => 'The additional cost for rural delivery. Default currency, no symbol.',
    'type'        => 'text',
    'default'     => '2.50',
    'options'     => '',
    'plugin'      => $classname
);
*/