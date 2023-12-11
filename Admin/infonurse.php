<?php 
$id=$_REQUEST['id'];
include("connect.php");
$result=mysqli_query($conn,"SELECT* FROM staff WHERE Staff_Id='$id'");
$row=mysqli_fetch_assoc($result);
 ?>

 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>AMH</title>
 <meta name="description" content="Sufee Admin - HTML5 Admin Template">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="apple-touch-icon" href="apple-icon.png">
 <link rel="shortcut icon" href="favicon.ico">
 <link rel="stylesheet" href="vendorhomepage/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="vendorhomepage/themify-icons/css/themify-icons.css">
 <link rel="stylesheet" type="text/css" href="css/showdriverinfo.css">
</head>

<div class="headtab">
  <table>
    <tr>
      <td> 
      <i class="fa fa-bank">&nbsp;&nbsp;&nbsp;</i>Staff ID&nbsp;&nbsp;
      </td>
      <td>
       <?php echo $row['Staff_Id']; ?>
     </td>
   </tr>

   <tr>
    <td> 
      <i class="fa fa-credit-card-alt">&nbsp;&nbsp;&nbsp;</i>Name&nbsp;&nbsp;
    </td>
    <td>
      <?php echo $row['Name']; ?>
    </td>
  </tr>

  <tr>
    <td> 
      <i class="fa fa-home">&nbsp;&nbsp;&nbsp;</i>Birthdate&nbsp;&nbsp;
    </td>
    <td>
     <?php echo $row['Birthdate']; ?>
   </td>
 </tr>

 <tr>
  <td> 
    <i class="fa fa-phone">&nbsp;&nbsp;&nbsp;</i>NRC&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['NRC']; ?>
  </td>
</tr>

<tr>
  <td> 
    <i class="fa fa-paw">&nbsp;&nbsp;&nbsp;</i>Gender&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Gender']; ?>
  </td>
</tr>

<tr>
  <td> 
    <i class="fa fa-server">&nbsp;&nbsp;&nbsp;</i>Address&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Address']; ?>
  </td>
</tr>

<tr>
  <td> 
    <i class="fa fa-spinner">&nbsp;&nbsp;&nbsp;</i>Phone&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Phone']; ?>
  </td>
</tr>

<tr>
  <td> 
    <i class="fa fa-mail-forward">&nbsp;&nbsp;&nbsp;</i>Email&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Email']; ?>
  </td>
</tr>

<tr>
  <td> 
    <i class="fa fa-mail-forward">&nbsp;&nbsp;&nbsp;</i>Joined Date&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Joined_Date']; ?>
  </td>
</tr>

<tr>
  <td> 
    <i class="fa fa-mail-forward">&nbsp;&nbsp;&nbsp;</i>Education&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Education']; ?>
  </td>
</tr>





<tr>
  <td> 
    <i class="fa fa-mail-forward">&nbsp;&nbsp;&nbsp;</i>Salary&nbsp;&nbsp;
  </td>
  <td>
    <?php echo $row['Salary']; ?>
  </td>
</tr>


</table>                                                               
</div>

<script type="text/javascript" src="vendor/jquery/dist/jquery.min.js"></script>   
<script src="vendorhomepage/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">


 $jq=jQuery.noConflict();
 $jq(document).ready(function(e) {

  $jq('.morecarinfo').slideDown("slower");


});

</script>   

      