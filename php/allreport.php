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
<p><table cellpadding="10" style="border:solid;"><tr><td> <form action="single_dp_report.php" method="post">This is the page of reports, The displayed report is general for all students that have completed <br><br>
registration, but you can also get the report of particular department <select name="dep"><option value="">Choose here</option>
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
<input type="submit" value="Get It"> </form></td></tr></table></p></center>
<?php
$st_id=$_SESSION['id'];
$query="SELECT* FROM student_tb INNER JOIN district_tb INNER JOIN faculty ON student_tb.district_id=district_tb.district_id AND
student_tb.faculty_id=faculty.faculty_id ORDER BY student_id desc";
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
<button onClick="window.printDiv('printreport')" style="padding:5px 20px; margin-top:-100px">Print Report</button></center>
<h3><br />
  <br />
  <br />
  <div id="printreport">
  .
  <table width="90%" align="center" cellspacing="5" cellpadding="5" style="margin-top:-50px; border:solid; border-color:#0099FF;">
<caption> <h2>ALL REGISTERED STUDENTS IN ALL DEPARTMENT </h2></caption><br>
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