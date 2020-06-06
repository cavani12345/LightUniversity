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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/mycss.css">
	<style>
	input[type=submit]
	{
	font-size:19px;
	border-collapse:collapse;
	color:#CC6633;
	}
	input[type=submit]:hover
	{
	padding:4px 16px;
	}
	input[type=reset]:hover
	{
	padding:4px 16px;
	}
input[type=reset]
	{
	font-size:19px;
	border-collapse:collapse;
	color:#CC6633;
	}
	
	#center:hover
	{
	 border:solid #003300; background-color:pink; width:600px; border-radius:8px; opacity:1;
	}
	#faculty
	{
	padding:3px 50px;
	border-color:#FF6699;
	border-radius:12px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:black;
	}
	input[type=text]
	{
	padding:3px 50px;
	border-color:#FF6699;
	border-radius:12px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	input[type=date]
	{
	padding:3px 50px;
	border-color:#FF6699;
	border-radius:12px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
	input[type=email]
	{
	padding:3px 50px;
	border-color:#FF6699;
	border-radius:12px;
	font-family:"Times New Roman", Times, serif;
	font-style:italic;
	font-size:18px; color:#0066FF;
	}
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
	<script>
function validi()
{
var course=document.getElementById("cn").value;
var abb=document.getElementById("ln").value;
if(course=="")
{
alert("Please enter your Course name");
document.getElementById("cn").style.borderColor="red";
document.getElementById("cn").focus();
return false;
}
else if(abb=="")
{
alert("Please enter Course abbreviation");
document.getElementById("ln").style.borderColor="red";
document.getElementById("ln").focus();
return false;
}
else
{
return true;
}
}
</script>
</head>
<body>
<?php
include 'call.php';
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
<h1 style="color:wheat;font-size:20px;text-align: center;position: relative;font-size: 200%;">LIGHT COLLEGE</h1>
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
<div align="center">
<a href="welcome_admin.php" id="log"><font size="+3">Go Home</font></a> &nbsp; &nbsp; &nbsp; &nbsp;</div>
	<div id="center" style=" margin-top:100px; text-align:center; margin-left:30%; opacity:0.8;">
	<script type="text/javascript">

	</script>
	
	<form action="insert_dpt.php" method="post" onSubmit="return validi();">
	<table cellspacing="16">
	<tr><td><label>Faculty Name:</label></td><td><input type="text" id="cn" name="cname" placeholder="Enter course Name" autofocus></td></tr>
	<tr><td><label>Course Abbreviation:</label></td><td><input type="text" id="ln" name="abb" placeholder="Enter abbreviation"></td></tr>

	<tr><td colspan="2" style="text-align:center;"><input type="submit" name="save" value="Save" > &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<input type="reset" name="reset" value="Reset"></td></tr>
	</table>
	</form>
	<?php
	
	}
	?>
	</div>
	
</body>
</html>