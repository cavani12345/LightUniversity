<?php
@session_start();
include 'call.php';
if(!isset($_SESSION['id']))
{
echo "<script> window.location.href('../html/login.html');";
}
else
{
?>
<doctype html>
<html>
<head>
<style>
#data:nth-child(odd)
{
background-color:#CCCCFF;
}
#data:hover
{
background-color:lightgreen;
color:white;
}
</style>
<title>Light</title></head>
<body>
<?php
$q="SELECT* FROM faculty";
$a=mysqli_query($connect,$q);
?>
<center>
<p><table cellpadding="10" style="border:solid;"><tr><td>This page contains visitors' messages.</td></tr></table></p></center>
<?php
$st_id=$_SESSION['id'];
$query="SELECT* FROM ussed";
$answer=mysqli_query($connect,$query);
$count=mysqli_num_rows($answer);
if($answer && $count>0)
{
?>
<script>
function printDiv(printthis)
{
var printthis=document.getElementById('printreport').innerHTML;
var wholedocument=document.body.innerHTML;
document.body.innerHTML=printthis;
window.print();
document.body.innerHTML=wholedocument;
}
</script>
<a href="welcome_admin.php"><h2>Go Home</h2></a>
<center>
<button onClick="window.printDiv('printreport')" style="padding:5px 20px; margin-top:-100px">Print Messages</button></center>
<h3><br />
  <br />
  <br />
  <div id="printreport">
  .
  <table width="90%" align="center" cellspacing="5" cellpadding="5" style="margin-top:-50px; border:solid; border-color:#0099FF;">
<caption> <h2>MESSAGES FROM VISITORS </h2></caption><br>
<tr><td align="left"><h3>FIRST NAME</h3></td><td align="left"><h3>LAST NAME</h3></td><td align="left"><h3>COUNTRY</h3></td><td align="left"><h3>MESSAGE</h3></td></tr>
<?php
while($line=mysqli_fetch_object($answer))
{
$fname=$line->FirstName;
$lname=$line->LastName;
$country=$line->Country;
$message=$line->Comment;
?>
<tr id="data"><td align="left"><?php echo $fname; ?></td><td align="left"><?php echo $lname; ?></td><td align="left"><?php echo $country; ?></td><td align="left"><?php echo $message; ?></td></tr>
<?php
}
?>
</table>
<?php
}
else
{
echo "<script> alert('sth wrong. Check if there is any student') </script>";
?>
<button onClick="history.back()">Back</button>

<?php
}
}
?>
</div>
</body>
</html>