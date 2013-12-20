{if $checkoutfees}
    <br /><strong>{$OPTIONS.hambrook_checkoutfields_heading_fees}</strong><br />
    {foreach $checkoutfees f}{$fieldname = $f.fieldname}{if $fields.$fieldname == "Y"}
        {$f.cf_title} ({$order.currency_symbol|default:'\$'}{$f.cf_price})<br />
    {/if}{/foreach}
{/if}