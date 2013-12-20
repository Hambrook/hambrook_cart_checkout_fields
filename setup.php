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

/* Edit Rows */
$data = Jojo::selectQuery("SELECT * FROM {page} WHERE pg_url='admin/edit/cart_checkoutfee'");
if (!count($data)) {
    echo "hambrook_cart_checkout_fields: Adding <b>Edit Checkout Fees</b> Page to menu<br />";
    Jojo::insertQuery("INSERT INTO {page} SET pg_title='Checkout Fees', pg_link='Jojo_Plugin_Admin_Edit', pg_url='admin/edit/cart_checkoutfee', pg_parent=". Jojo::clean($_ADMIN_SHOPPING_ID).", pg_order=5, pg_sitemapnav='no', pg_xmlsitemapnav='no', pg_index='no', pg_followto='no', pg_followfrom='yes'");
}