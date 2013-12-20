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
$query = "
    CREATE TABLE {$table} (
        `checkoutfieldid` int(11) NOT NULL auto_increment,
        `cf_title` varchar(255) NOT NULL default '',
        `cf_desc` varchar(255) NOT NULL default '',
        `cf_price` decimal(10,2) NOT NULL default '0.00',
        `cf_order` int(10) NOT NULL default '0',
        `cf_status` enum('active','inactive') NOT NULL default 'active',
        PRIMARY KEY (`checkoutfieldid`)
    ) TYPE=MyISAM;";

/* Check table structure */
$result = Jojo::checkTable($table, $query);

/* Output result */
if (isset($result['created'])) {
    echo sprintf("hambrook_cart_checkout_fields: Table <b>%s</b> Does not exist - created empty table.<br />", $table);
}

if (isset($result['added'])) {
    foreach ($result['added'] as $col => $v) {
        echo sprintf("hambrook_cart_checkout_fields: Table <b>%s</b> column <b>%s</b> Does not exist - added.<br />", $table, $col);
    }
}

if (isset($result['different'])) Jojo::printTableDifference($table,$result['different']);