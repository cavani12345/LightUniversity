<?php
	include 'call.php';
	if(isset($_POST['save']))
	{
        $st_fname=$_POST['fname'];
        $st_lname=$_POST['lname'];
        $st_email=$_POST['email'];
        $st_dob=$_POST['DB'];
        $st_nid=$_POST['id'];
		$st_level=$_POST['level'];
        $st_fac_id=$_POST['faculty'];
        $st_dis=$_POST['district'];
	$query="INSERT INTO student_tb(student_firstname,student_lastname,student_email,student_dob,student_nid,level,faculty_id,district_id)
     VALUES('$st_fname','$st_lname','$st_email','$st_dob','$st_nid','$st_level',$st_fac_id,$st_dis)";
	$answer=mysqli_query($connect,$query);
	if($answer)
	{
	echo "<script> alert(' you are registered')</script>";
	$query0="SELECT* FROM student_tb";
	$answer0=mysqli_query($connect,$query0);
	while($line=mysqli_fetch_object($answer0))
	{
	$regn=$line->student_id;
	$fname=$line->student_firstname;
	}
	?>
	<div style="border:solid 3px green; text-align:center; padding-top:20px;">
	<p>
	<a href="../html/login.html">Go to Login</a><br><br><br>
	Welcome <b><?php echo $fname;  ?></b>,<br>
	you are now registered and your registration number is <h2 style="color:blue;"><?php echo $regn; ?></h2>.<br>
	To see your Proof of registration, you have to login through login form by using <br>
	your registration Number as your username and your Password at the same time.
	</p>
	</div>
	<?php
	}
	else
	{
	echo "<script> alert('Transaction failed')</srcipt>";
	include 'registration.php';
	}
	}
   mysqli_close($connect);
	?>