<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Saufest</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

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
  $url=$get2['participantphoto1'] ;
 /*  $num = mysqli_num_rows($sql);
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

}
?>
<body>
<div class="container" style="height:600px; width:450px; border :2px solid red;"> 
<div class="row" style="height:15%">
</br>
<img  style="height:6; width:60px;" class="img-circle" src="davv.jpg" />
<b>10<sup>th</sup> SOUTH ASIAN UNIVERSITIES FESTIVAL</b>
<img style="height:60px; width:60px;" class="img-circle" src="saufestlogo.jpg"/>
</div>
<hr/>
<div class="row"><h3 style="text-align: center;">Participant</h3></div>
<div style="height:100px; width:90px ; margin-left: 157px; border:2px solid red;">
   <img src="<?php echo $url?>" style="height:100px; width:90px ;" / >
</div>
</br>
<div class="row">
<table class=" table table-hover" >
<tr><td> Name : </td>
  <td>    
  <?php echo $participantname ?>  </td></tr> 
<tr><td> Event :</td>
<td> <?php echo $subject ?></td></tr>
<tr><td>University :</td>
<td> <?php echo $universityname ?></td></tr> 
<tr><td>Manager Name :</td>
<td> <?php echo $mangername ?></td></tr> 
</table>

</div>

</div>







</body>
</html>