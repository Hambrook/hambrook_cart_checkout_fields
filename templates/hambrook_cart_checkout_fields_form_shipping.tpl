{if $checkoutfees}
    <h3>{$OPTIONS.hambrook_checkoutfields_heading_fees}</h3>
    {foreach $checkoutfees f}{$fieldname = $f.fieldname}
            <label for="{$f.fieldname}">{$f.cf_title} ({$order.currency_symbol|default:'\$'}{$f.cf_price})</label>
            <input type="checkbox" name="{$f.fieldname}" id="{$f.fieldname}" value="Y"{if $fields.$fieldname == "Y"} checked="checked"{/if} />
            {if $errors.$fieldname}<div class="error">{$errors.$fieldname}</div>{/if}
            <div class="clear"></div>
    {/foreach}
{/if}