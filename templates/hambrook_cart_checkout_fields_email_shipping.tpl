{if $checkoutfees}{$OPTIONS.hambrook_checkoutfields_heading_fees}
{$OPTIONS.hambrook_checkoutfields_heading_fees|regex_replace:"/./":"="}
{foreach $checkoutfees f}{$fieldname = $f.fieldname}{if $fields.$fieldname == "Y"}
    {$f.cf_title} ({$order.currency_symbol|default:'\$'}{$f.cf_price})
{/if}{/foreach}
{/if}