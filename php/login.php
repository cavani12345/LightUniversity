<?php
session_start();
include 'call.php';
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
if($user==$pass)
{
$query="SELECT* FROM student_tb where student_id='$pass' ";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count==0)
{
  echo"<script> alert('you are accepted');
  window.location.href='welcome_student.php';
  </script>";
}
else
{
while($line=mysqli_fetch_object($result))
{
$st_id=$line->student_id;
$st_fname=$line->student_firstname;
$st_lname=$line->student_lastname;
$faculty=$line->faculty_id;
}
$_SESSION['id']=$st_id;
$_SESSION['firstname']=$st_fname;
$_SESSION['lastname']=$st_lname;
$_SESSION['faculty']=$faculty;
echo "<script> alert('you are accepted');
window.location.href='welcome_student.php';
</script>";

}
}
else
{
  echo"<script> alert('invalid user crudential');
  window.location.href='registration.php';
  </script>";
}
}
?>