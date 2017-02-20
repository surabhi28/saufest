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

<style>
TD{ font-size: 8.5pt; align:right;}

hr{ 
   margin-top:0.7em;
   margin-bottom:0em;
   border-width:2px;
} 

@media print {
    h2{page-break-after: auto;}
}

</style>

</head>
<body>


<br/>
<br/>

<?php

   $connect=mysqli_connect('localhost','root','','saufest');

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
  $url=$get2['participantphoto1'] ;  ?>

<div class="container" style="height:425px; width:275px; border:2px solid #FF8000; background-color:#F9F9F9; "> 

<left><img src="saufest_header.jpg" style="margin-top:7px; height:40px; width:250px;"></left>
<hr/>
<h6 style="text-align:center;"><b>PARTICIPANT IDENTITY CARD</b></h6>
<center><div style="height:120px; width:110px; border:1px solid #FF8000">
<img src="<?php echo $url; ?>" style="height:118px; width:108px ;"></div></center>
<table class="table" style="margin-top:12px;">
  <col width="70">  
  <col width="150">  
<tr><td style="color:"><b>Name</b> </td><td><?php echo $participantname ?>  </td></tr> 
<tr><td><b>Event</b></td><td><?php echo $subject ?></td></tr>  
<tr><td><b>University</b></td><td> <?php echo $universityname ?></td></tr> 
<tr><td><b>Manager</b></td><td> <?php echo $mangername ?></font></td></tr> 
</table>

</div>




<?php }


else if(isset($_POST['submitall']))
{

  $sql = mysqli_query($connect,"SELECT * FROM saufest_table");


   
  while($get2 = mysqli_fetch_array($sql))
  {
  $universityname= $get2['universityname']; 
  $participantname = $get2['participantname']; 
  $subject = $get2['your-subject'];
  $mangername = $get2['manager-name']; 
  $url=$get2['participantphoto1'] ; ?>

  <div class="container" style="height:425px; width:275px; border:2px solid #FF8000; background-color:#F9F9F9; "> 

<left><img src="saufest_header.jpg" style="margin-top:7px; height:40px; width:250px;"></left>
<hr/>
<h6 style="text-align:center;"><b>PARTICIPANT IDENTITY CARD</b></h6>
<center><div style="height:120px; width:110px; border:1px solid #FF8000">
<img src="<?php echo $url; ?>" style="height:118px; width:108px ;"></div></center>
<table class="table" style="margin-top:12px;">
  <col width="70">  
  <col width="150">  
<tr><td style="color:"><b>Name</b> </td><td><?php echo $participantname ?>  </td></tr> 
<tr><td><b>Event</b></td><td><?php echo $subject ?></td></tr>  
<tr><td><b>University</b></td><td> <?php echo $universityname ?></td></tr> 
<tr><td><b>Manager</b></td><td> <?php echo $mangername ?></font></td></tr> 
</table>

</div>
<h2> </h2>

<?php

}
}   ?>

</body>
</html>