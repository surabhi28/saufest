 
<?php 
$con = mysql_connect("localhost","root","surbhi28") or die();
mysql_select_db("saufest",$con) or die();

?>
<div class="dropdown">
     <label for="Enrollment No.">Member Name:</label>
  <select class="btn dropdown-toggle" data-toggle="dropdown" name="name">
  <option selected disabled>Select Name</option>  
 
    
    <?php
          $uni=$_POST['uni'];
          $name="SELECT  * from saufest_table where universityname ='$uni' ";
          
          $result = mysql_query($name, $con);
          while($row =mysql_fetch_array($result)) 
            {
              ?>

       <option> <?php echo $row['participantname']; ?> </option>

    <?php } ?>
  

  
  
</select> 