<?php
@session_start();
if(!isset($_SESSION['id']))
{
echo "<script> window.location.href('../html.login.html');";
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="../js/JavaScript.js">

</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/mycss.css">
	<style>

	
	
	label
	{
	font-size:24px;
	font-style:italic;
	}
	td{ text-align:left;} sup{ color:#FF0000;} 
	select{
	padding:3px 12px;
	border-color:#FF99CC;
	border-radius:12px;
	font-family:"Times New Roman", Times, serif;
	font-style:normal;
	font-size:18px; color:black;
	}
	.address
	{
	padding:3px 15px;
	border-color:#FF99CC;
	border-radius:12px;
	font-family:"Times New Roman", Times, serif;
	font-style:normal;
	font-size:18px; color:black;
	}
	#log
	{
	text-decoration:none;
	border-bottom:solid #00CCFF;
	border-left:solid #00CCFF;
		}
		#log:hover
	{
	color:#0099CC;
	}
	</style>

</head>
<body>
<?php
include 'call.php';
$ad_id=$_SESSION['id'];
?>
<header>
<div class="social-media">
</div>
<div class="bigdiv">
<div class="smalldiv">
<div class="logo">
<img src="../imgs/za.png" alt="logo" height="95" width="95">
</div>
<div class="mytitle">
<h1 style="color:wheat;font-size:20px;text-align: center;position: relative;font-size: 200%;">LIGHT UNIVERSITY</h1>
</div>
<div class="mysearch">
</div>
</div>
 </div>
</header>  
 <section>
 <nav>
   <div class="mylink">
                <ul class="link">                  
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../html/aboutus.html">About</a></li>
                    <li><a href="../html/campus.html">Campus</a></li>
                    <li class="dropdown"><a href="" class="dropbt">Admission</a>
                    <div class="drop-content">
                    <ul>
                            <li> <a href="registration.php">Registration</a></li>
                            
                                            </ul>
                                                </div>
                    </li>
                    <li><a href="../html/studentslife.html">Student_Life</a></li>
                    <li><a href="cont.php">Contact_Us</a></li>
                </ul>
            </div>
 </nav>
</section>  
 <div class="re">
 <table border="0">
 <tr class="cel">
 <td><a href="http://www.instagram.com"><img src="../imgs/icons/i.png" alt="Insta" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td><a href="http://www.twitter.com"><img src="../imgs/icons/t.png" alt="Twitter" height="24" width="25"></a>&nbsp;&nbsp; | &nbsp;&nbsp;</td>
 <td><a href="http://www.facebook.com"><img src="../imgs/icons/f.png" alt="Facebok" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td><a href="http://www.pinterest.com"><img src="../imgs/icons/p.png" alt="Pinterest" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td><a href="http://www.skype.com"><img src="../imgs/icons/s.png" alt="Skype" height="24" width="25"></a> &nbsp;&nbsp;|&nbsp;&nbsp; </td>
 <td>      <h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;color:rgb(31, 31, 59);font-weight:bold;outline:solid;outline-size:1px;outline-color:brown;">Contect With Us!</h4></td>
 </tr>
 </table>
</div>
	<div id="center" style=" margin-top:30px; text-align:center; margin-left:10%; margin-right:200px; opacity:0.8;">
<div align="center" style="margin-top:2PX;">
<a href="allreport.php" id="log"><font size="+3">Reports</font></a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="course.php" id="log"><font size="+3">Add Course</font></a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="department.php" id="log"><font size="+3">Add Department</font></a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="admin_message.php" id="log"><font size="+3">Comments</font></a> &nbsp; &nbsp; &nbsp; &nbsp;
<a href="logout_admin.php" id="log"><font size="+3">Log out</font></a> </font>
</div>
<br><br>
<div align="left" style="margin-left:20px; margin-top:50PX; border:solid red; border-right:none;">
<?php
$st_id=$_SESSION['id'];
$query="SELECT* FROM admin_tb where admin_id=$ad_id";
$answer=mysqli_query($connect,$query);
while($line=mysqli_fetch_object($answer))
{
$ad_fname=$line->admin_firstname;
$ad_lname=$line->admin_lastname;
}

?>
<font size="+2">
Welcome Dear <?php echo $ad_fname; 
}
?> .<br>

</div>
	
	</div>
	
</body>
</html>