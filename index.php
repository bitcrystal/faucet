<?php
/**
 * @author Greedi
 * @copyright 2012
 * 
 */
include ('core/banned.php');
include ('core/wallet.php');
include ('templates/header.php');
//include ('core/dnsbl.php');

?>
        <div class="row">
          <div class="span10">
<?php
$command = "SELECT * FROM roundltc";
$q = mysql_query($command);
$res = mysql_fetch_array($q);
$entries_needed = $res["needed_round_entries_to_payout"];
echo "<h4><center>Payout will happen when there are atleast <strong>$entries_needed</strong> submitted!<br></h4>
You can only enter once per round, if we detect the same IP or a proxy, you\'ll not be paid.";
?>
         
<style>
.tdr{text-align:right;}
</style>
<center><br>
<form action="submitted.php" method="post">
<td class="tdr"><font color="green">Your Bitcrystal Address Here:</font></td>
<td><input type="text" name="BTCRY"></td>
<?php
echo GetCaptcha($adscaptchaID, $adspubkey);
?>
<td colspan="3" align="center"><input type="submit" value="Submit"></td>
</center>
</div>
<?php
include ("templates/sidebar.php");
include ('templates/footer.php');
?>

