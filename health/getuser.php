<!DOCTYPE html>
<html>
<head>
    <title>

    </title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <script  src="bootstrap.min.js"></script>
</head>
<body>
<?php
$q = $_GET['q'];
//$r= $_GET['r'];

include('config.php');
mysqli_set_charset($conn,'utf8');
$result = mysqli_query($conn, "SELECT *
            FROM staff WHERE Department=$q;");



echo "";
echo"<select name='doctor' id='doctor' class='custom-select' id='doctor'>";
         echo"   <option value='0'>-- Choose --</option>";
          

            
            while($row = mysqli_fetch_assoc($result)){
                
           echo "<option value=". $row['Staff_Id'] .">";
                 echo $row['B_Name']  ;
           echo" </option>";
     }
    echo "</select>";
  
   // $date = DateTime::createFromFormat('Y-m-d',$r);
   // $valid= $date->format('l');

mysqli_close($conn);
?>


</html>