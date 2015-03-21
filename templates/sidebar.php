<div class="span4"> <!-- This is the sidebar, don't forget -_- -->
<?php
include ('core/daily.php');
echo '
            <div style="margin-right: 10px;">
            <h3><center>Faucet statistics</center></h3>
            <table class=\'zebra-striped\'>
                        <tr><td>Submitted This Round: </td><td>' . $round . '</td></tr>
<tr><td>Current Payout: </td><td>' . $roundltc . ' BTCRY</td></tr> 
<tr><td>Current Round: </td><td>' . $dailyltc . ' BTCRY</td></tr>
            <tr><td>Total Payout: </td><td>' . $dailytotal . ' BTCRY</td></tr>
</table>';
?>

<center>
<p>Put your own stuff here.</p>

<br>
</a>

</center></div>
          