<!DOCTYPE html>
<html>
<?php
	require("header.php");
	getHeader();
?>

<?php
	<?php 
 // Connects to your Database 
$name="root";
$pas="password";
$dbname="wp_eatery";
$con=mysql_connect("localhost",$name,$pas);
if (mysql_error() > "") print mysql_error() . "<br>";
mysql_select_db($dbname,$con);
if (mysql_error() > "") print mysql_error() . "<br>"; 
 $data = mysql_query("SELECT * FROM mailingList") 
 or die(mysql_error()); 
 Print "<table border cellpadding=5"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Id:</th> <td>".$info['_id']. "</td> ";
 Print "<th>Name:</th> <td>".$info['customerName']. "</td> ";
 Print "<th>Phone Number:</th> <td>".$info['phoneNumber'] . "</td> ";
 Print "<th>E-Mail:</th> <td>".$info['emailAddress'] . "</td> "; 
 Print "<th> Referrer </th> <td>".$info['referral'] ."</td></tr>" ; 
 } 
 Print "</table>"; 
 ?> 
?>

<?php
	require("footer.php");
	getFooter();
?>
</html>