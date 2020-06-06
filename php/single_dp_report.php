<?php
@session_start();
include 'call.php';
if(!isset($_SESSION['id']))
{
echo "<script> window.location.href('../html.login.html');";
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
<p><table style="border:solid;"><tr><td> <form action="single_dp_report.php" method="post">This is the page of reports, The displayed report is specific for one department  <br><br> you have choosen, but you can also get the report of an other department <select name="dep"><option value="">Choose here</option>
<?php 
while($r=mysqli_fetch_object($a))
{
$id=$r->faculty_id;
$name=$r->faculty_name;
?>
<option value="<?php echo $id; ?>"><?php echo $name; ?></option>
<?php
}
?>
</select> &nbsp;&nbsp;
<input type="submit" value="Get It"> </form>  Or get back to <a href="allreport.php">General report</a></td></tr></table></p></center>
<?php
$st_id=$_SESSION['id'];
$d=$_POST['dep'];
if(!empty($d))
{
$query="SELECT* FROM student_tb INNER JOIN district_tb INNER JOIN faculty ON student_tb.district_id=district_tb.district_id AND
student_tb.faculty_id=faculty.faculty_id WHERE faculty.faculty_id=$d ORDER BY student_id desc";
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
<br><br>
<center>
<button onClick="window.printDiv('printreport')" style="padding:5px 20px; margin-top:-20px">Print Report</button></center>
<h3><br />
  <br />
  <br />
  <div id="printreport">
  .
  <table width="90%" align="center" cellspacing="5" cellpadding="5" style="margin-top:-70px; border:solid; border-color:#0099FF;">

<tr><td align="left"><h3>STUDENT NUMBER</h3></td><td align="left"><h3>FIRST NAME</h3></td><td align="left"><h3>LAST NAME</h3></td><td align="left"><h3>EMAIL</h3></td><td align="left"><h3>FACULTY</h3></td><td align="left"><h3>LEVEL</h3></td><td align="left"><h3>DISTRICT</h3></td></tr>
<?php
while($line=mysqli_fetch_object($answer))
{
$student_id=$line->student_id;
$student_fname=$line->student_firstname;
$student_lname=$line->student_lastname;
$student_district=$line->district_name;
$student_faculty=$line->faculty_name;
$student_email=$line->student_email;
$student_level=$line->Level;
?>
<tr id="data"><td align="left"><?php echo $student_id; ?></td><td align="left"><?php echo $student_fname; ?></td><td align="left"><?php echo $student_lname; ?></td><td align="left"><?php echo $student_email; ?></td><td align="left"><?php echo $student_faculty; ?></td><td align="left"><?php echo $student_level; ?></td><td align="left"><?php echo $student_district; ?></td></tr>
<?php
}
?>
<caption> <h2>ALL REGISTERED STUDENTS IN <?php echo $student_faculty; ?> </h2></caption><br>
</table>
<?php
}
else
{
echo "<script> alert('sth wrong. Check if there is any student') </script>";
?>

<?php
}
}
else
{
?>
<script>
document.getElementById('printreport').innerHTML="You did not choose any Department";
</script>
<?php
}
}
?>
</div>
</body>
</html>