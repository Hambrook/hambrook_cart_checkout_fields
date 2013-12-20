<table class="adminTransactionList">
  <thead>
    <tr>
      <th>Other</th>
    </tr>
  </thead>
  <tbody>
    <tr class="row1">
      <td>
        Referer: {if $fields.referer}{$fields.referer}{else}None{/if}<br />
        Accepted Terms: {if $fields.terms}Yes{else}No{/if}
      </td>
    </tr>
  </tbody>
</table>



