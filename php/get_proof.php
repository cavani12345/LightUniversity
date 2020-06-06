<?php
@session_start();
include 'call.php';
$st_id=$_SESSION['id'];
$query="SELECT* FROM student_tb INNER JOIN district_tb INNER JOIN faculty INNER JOIN course_tb ON student_tb.district_id=district_tb.district_id AND
student_tb.faculty_id=faculty.faculty_id AND faculty.faculty_id=course_tb.faculty_id where student_id=$st_id";
$answer=mysqli_query($connect,$query);
$count=mysqli_num_rows($answer);
if($answer && $count>0)
{
while($line=mysqli_fetch_object($answer))
{
$student_id=$line->student_id;
$student_fname=$line->student_firstname;
$student_lname=$line->student_lastname;
$student_district=$line->district_name;
$student_faculty=$line->faculty_name;
$student_cname=$line->course_name;
$student_ccode=$line->course_code;
$faculty_code=$line->faculty_code;
$student_level=$line->Level;
}
?>
<script>
function printDiv(printthis)
{
var printthis=document.getElementById('printstock').innerHTML;
var wholedocument=document.body.innerHTML;
document.body.innerHTML=printthis;
window.print();
document.body.innerHTML=wholedocument;
}
</script>
<center>
<button onclick="window.printDiv('printstock')" style="padding:5px 20px; margin-top:40px">Print Proof</button></center><br /><br /><br />
<div id="printstock">
<table width="50%" align="center" cellspacing="50" style="margin-top:40px; border:solid;"><tr><td align="left">
<div align="left"><img src="../imgs/za.png" width="100" height="100" /></div><br />
PO BOX <br /> <?php echo $student_district; ?> <br /><br />
<script>var today=new Date();
var day=today.getDay();
var year=today.getYear();
var month=today.getMonth();
document.write(today);</script>
 <br />

</td></tr>
<tr><td align="center"><b>PROOF OF REGISTRATION</b></td></tr>
<tr><td align="left">
<b>Student Number: </b><?php echo $student_id; ?> <br /> <br />
Dear <?php echo $student_fname; ?> <br /> &nbsp;&nbsp;  This confirms your registration for the academic year 2019 , as detailed 
<br /><br />
<b>Qualification:</b> <?php echo $faculty_code." (HONS) IN ".$student_faculty; ?> <br />
<b>Student Level:</b> <?php echo $student_level; ?> <br />
<b>Offering type:</b> LIGHT UNIVERSITY <br /><br />
<b>Modules:</b> <br />
<?php
$query2="SELECT* FROM student_tb INNER JOIN district_tb INNER JOIN faculty INNER JOIN course_tb ON student_tb.district_id=district_tb.district_id AND
student_tb.faculty_id=faculty.faculty_id AND faculty.faculty_id=course_tb.faculty_id where student_id=$st_id";
$answer2=mysqli_query($connect,$query);
$count2=mysqli_num_rows($answer);
if($answer2 && $count2>0)
{
while($line=mysqli_fetch_object($answer2))
{
$cname=$line->course_name;
$ccode=$line->course_code;
echo $ccode." ".$cname."<br>";
}
}
?>
<br /><br />
<b>Please note that your registration will remain provisional until<br />
settlement of the first installment.<br />
Please contact the Finance Unit of your College and present proof of payment<br /><br />
</b>
Please find your email address as specified by Light University (LU):<br />
<b>EMAIL:</b><?php echo $st_id; ?>@lu.ac.rw.
</td></tr>
</table>
</div>
<?php

}
else
{
echo "<script> alert('sth wrong. Check if there is any student');
window.location.href(''); </script>";
}
?>