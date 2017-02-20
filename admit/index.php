
<!DOCTYPE html>
<html>

<head>
    <title>saufest</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
<script>
        $(document).ready(function(){
          $("select[name='uni']").change(function () {
          var uni = $("select[name='uni'] option:selected").val();
                jQuery.ajax({
                type: "POST",
                data:  {uni :uni},
                url: 'check.php',
                success: function(msg){
                       
                         $('#univ').html(msg);
                }
                });  
               
                
        });
        });
        </script>
        <style >
  @media print {
  button{ 
    page-break-before: always;
  }
</style>
</head>
<?php 
$con = mysql_connect("localhost","root","") or die();
mysql_select_db("saufest",$con) or die();
?>
<body>

<img src="header.JPG" style="width:100%; height:150px;">
</br>
<br/>
<marquee behavior="scroll" direction="left" scrollamount="10" style="color:#143E57;"><h4><b>Kindly Login to Wordpress before generating ID Cards to affix photographs.</b></h4></marquee>
<br/>
<br/>
<div class="container panel panel-success"  style="text-align:center; width:100%; background-color:rgba(31,91,125,0.26);">
  
  
 <form action="AdmitCard.php" method="post">
 <br/><br/>
    <div class="form-group " >
    <form action="check.php" method="post">
       <div class="dropdown" id="university">
    <label>University Name : &emsp; </label>
     <select class="btn dropdown-toggle" data-toggle="dropdown" name="uni"  >
     <option selected disabled>Select name</option>
   
    <?php 
          $name="SELECT DISTINCT universityname from saufest_table";
          $result = mysql_query($name, $con);
          while($row =mysql_fetch_array($result)) 
            {
              ?>
  <option onclick="university('<?php echo $row['universityname']; ?>')"> <?php echo $row['universityname']; ?> </option>
    
    
   <?php }   ?>
    </select>
  
  </div>
    </div>
   
    <div class="form-group"  id="univ">
    
</div>
    
 
  </br>
  <button type="submit" name ="submit" class="btn btn-submit" style="background-color:#143E57;  color:white;">Download ID Card</button>
<br/>
<br/>
</form>
</div>
</body>
</html> 
