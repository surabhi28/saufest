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
$con = mysql_connect("localhost","root","surbhi28") or die();
mysql_select_db("saufest",$con) or die();

?>

<body>
</br>
</br>
</br>

<div class="container"  style="text-align: center;">
  
  
 <form action="AdmitCard.php" method="post">

    <div class="form-group " >
    <form action="check.php" method="post">
       <div class="dropdown" id="university">
    <label>University Name:</label>
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
  </br>
  <button type="submit" name ="submit" class="btn btn-submit" style="background-color:#663300;  color:white;">View Admit Card</button>
</form>
</div>

</body>
</html> 