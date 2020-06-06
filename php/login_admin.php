<?php
session_start();
include 'call.php';
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$query="SELECT* FROM admin_tb where admin_username='$user' && admin_password='$pass' ";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count==0)
{
echo "<script> alert('Invalid input')</script>";
?>
<a href="../html/login_admin.html"><h2>back Login</h2></a>
<?php
}
else
{
while($line=mysqli_fetch_object($result))
{
$ad_id=$line->admin_id;
$ad_fname=$line->admin_firstname;
$ad_lname=$line->admin_lastname;
}
$_SESSION['id']=$ad_id;
$_SESSION['firstname']=$ad_fname;
$_SESSION['lastname']=$ad_lname;
echo "<script> alert('you are accepted');
window.location.href('welcome_admin.php');
</script>";

}
}
?>