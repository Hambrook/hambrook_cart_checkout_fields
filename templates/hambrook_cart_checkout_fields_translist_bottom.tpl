{if $checkoutfees}
<table class="adminTransactionList">
  <thead>
    <tr>
      <th>{$OPTIONS.hambrook_checkoutfields_heading_fees}</th>
    </tr>
  </thead>
  <tbody>
    <tr class="row1">
      <td>
        {foreach $checkoutfees f}{$fieldname = $f.fieldname}{if $fields.$fieldname == "Y"}
            {$f.cf_title} ({$order.currency_symbol|default:'\$'}{$f.cf_price})<br />
        {/if}{/foreach}
      </td>
    </tr>
  </tbody>
</table>
{/if}