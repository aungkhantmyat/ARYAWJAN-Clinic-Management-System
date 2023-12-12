<?php
session_start();
include("config.php");
$result=mysqli_query($conn,"SELECT * from appointment");
$doctor_id="111";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Modal Example</h2>
  <h2 id="testing"></h2>
  <div class="table-responsive">
         <!-- <table class="table  table-hover">
          <thead>
            <tr>

              <th>#</th>
              <th>Name</th>

              <th>Phone</th>
              <th>Email</th>
              <th>Account/Book</th>
              <th>Arrive</th>
              <th>Cancel</th>
            </tr>
          </thead>
          <div id="txtHint">
            <tbody>

              <tr>
               <?php
               $count=1;
               while($row = mysqli_fetch_assoc($result)): ?>
                 <td><?php echo $count ?></td>
                 <td><?php echo $row['app_name']?></td>
                 <td><?php echo $row['app_phone']?></td>
                 <td><?php echo $row['app_email']?></td>

<td>
  <button type="button" name="button" class="btn btn-success">Make Accout</button>
</td>
<td>
  <?php $doc=$row['patientid'];
  echo $doc?>
<?php $app_id=$row['app_id'];
?>
  <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="getId(<?php echo $doc ?>)">Arrive</button>
</td>
<td>
  <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1" onclick="getAppId( '<?php echo $app_id ?>')">Cancel</button>
</td> -->


                      <!-- <button type="button" class="btn" data-toggle="modal" data-target="#myModal"
                      onclick="getUpdateCategory(<?php echo $row['cat_number'] ?>)">
                      <i class='fas fa-sync-alt' style='font-size:24px'></i>
                    </button> -->


                   <!-- <a href="delete/deleteCategory.php?num=<?php echo $row['cat_number'] ?>" class="del"> <i class='far fa-trash-alt' style='font-size:24px; color: black'></i></a> -->




           <!-- </tr>
           <?php $count++;

         endwhile; ?>

       </tr>



     </tbody>
   </div>


 </table> -->
</div>



  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Arrive</h4>


          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" id="modal-body">

          

        </div>
</div>
</div>
</div>


        <!-- Modal footer -->




        <!-- The Modal -->
        <div class="modal fade" id="myModal1">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Cancel</h4>

                <button type="button" class="close" data-dismiss="modal">×</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body" id="modal-body1">


                


              </div>


      </div>
    </div>
  </div>


<script>
function getId(str) {
  if (window.XMLHttpRequest) {
     // code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
   } else {  // code for IE6, IE5
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function() {
     if (this.readyState==4 && this.status==200) {
       document.getElementById("modal-body").innerHTML=this.responseText;
     }
   }
   var aaa=str+','+'<?php echo strval($doctor_id); ?>';
alert(aaa);

   xmlhttp.open("GET","pArrivePreAdd.php?var="+aaa,true);
   xmlhttp.send();
 }

 function getAppId(str) {
  if (window.XMLHttpRequest) {
     // code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
   } else {  // code for IE6, IE5
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
   xmlhttp.onreadystatechange=function() {
     if (this.readyState==4 && this.status==200) {
       document.getElementById("modal-body1").innerHTML=this.responseText;
     }
   }
   
alert(str);

   xmlhttp.open("GET","AppPreCancel.php?var="+str,true);
   xmlhttp.send();
 }

</script>


</body>
</html>
