<?php

   $connect=mysqli_connect('localhost','root','surbhi28','saufest');
  /*if($connect)
  echo "Connected";
  else
  echo "Not connected";*/

if(isset($_POST['submit']))
{
  $username=mysqli_real_escape_string($connect,$_POST['uni']);
  $password=mysqli_real_escape_string($connect,$_POST['name']);

  $sql = mysqli_query($connect,"SELECT * FROM `saufest_table` WHERE (universityname='$username' AND participantname ='$password')");

        $get2= mysqli_fetch_assoc($sql);  
        $universityname= $get2['universityname']; 
	$participantname = $get2['participantname']; 
  $subject = $get2['your-subject'];
  $mangername = $get2['manager-name'];  
 /*	 $num = mysqli_num_rows($sql);
   	$result = mysqli_num_rows($sql);
       	if($result > 0)
        {
          $_SESSION['username'] = $username;
          header("location:student_profile.php?id=$id");
          exit();
        }
        else{
	echo "<script>
	window.location.href='index.php';
	alert('Invalid Email or Password');
	</script>";
        }
}*/
echo $universityname ;
echo $participantname;
echo  $subject ;
echo $mangername;
}
?>