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
 
class Jojo_Plugin_hambrook_cart_checkout_fields extends Jojo_Plugin {

    /* Set custom shipping cost */
    public function set_shipping($total, $cart) {
        // $cart->fields['shippingMethod'];
        $fees = self::get_fees();
        foreach ($fees as $f) {
            if ($cart->fields[$f["fieldname"]] == "Y") {
                $total += $f["cf_price"];
            }
        }
        return $total;
    }

	public function add_fields_to_form_shipping() {
		global $smarty;
        // Checkout Fees
        $smarty->assign("checkoutfees", self::get_fees());
        // other checkout fields
        // Render
	    echo $smarty->fetch('hambrook_cart_checkout_fields_form_shipping.tpl');
	}

	public function add_fields_to_fields($fields) {
        // Checkout Fees
        $customfields = self::get_fees();
        foreach ($customfields as $cf) {
            $fields[] = $cf["fieldname"];
        }
        // other checkout fields
        // Return
		return $fields;
	}
	public function add_fields_to_required_fields($fields) {
		//$fields[] = 'terms';
		return $fields;
	}
    public function add_fields_to_email_shipping() {
		global $smarty;
        // Checkout Fees
        $smarty->assign("checkoutfees", self::get_fees());
        // other checkout fields
        // Render
	    echo $smarty->fetch('hambrook_cart_checkout_fields_email_shipping.tpl');
	}
    public function add_fields_to_details_shipping() {
		global $smarty;
        // Checkout Fees
        $smarty->assign("checkoutfees", self::get_fees());
        // other checkout fields
        // Render
	    echo $smarty->fetch('hambrook_cart_checkout_fields_details_shipping.tpl');
	}
	public function add_fields_to_translist_th() {
		echo "<th>Referrer</th>";
	}
    /*
	public function add_fields_to_translist_td() {
		global $smarty;
	    echo $smarty->fetch('hambrook_cart_checkout_fields_translist_td.tpl');
	}
    */
	public function add_fields_to_translist_bottom() {
		global $smarty;
        $smarty->assign("checkoutfees", self::get_fees());
	    echo $smarty->fetch('hambrook_cart_checkout_fields_translist_bottom.tpl');
	}

    public function get_fees($all=false) {
        $qry = "SELECT * FROM {cart_checkoutfee} ";
        if (!$all) {
            $qry .= "WHERE cf_status = 'active' ";
        }
        $qry .= "ORDER BY cf_order, cf_title";

        $fields = Jojo::selectQuery($qry);
        $fields = Jojo::applyFilter("hambrook_cart_checkout_fields", $fields);

        foreach ($fields as $id => $f) {
            if (isset($f["fieldname"]) && $f["fieldname"]) { continue; }
            $fields[$id]["fieldname"] = Jojo::cleanURL($f["cf_title"]);
        }

        return $fields;
    }

}