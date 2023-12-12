    <?php
$id = $_GET['id'];
$temp = [];
$temp = explode(",", $id);

$date = $temp[0];
$doctor = $temp[1];
$conn = mysqli_connect("localhost", "root", "", "testingaq");
$res = "SELECT * FROM appointment WHERE app_date='$date' and app_doctor='$doctor'";
$result = mysqli_query($conn, $res);
$now = date("Y-m-d");
$ts1 = strtotime($date);
$ts2 = strtotime($now);
$timediff = $ts2 - $ts1;
$days = $timediff / 86400;
// echo $days;

?>
    <!DOCTYPE html>
    <html>
    <head>
        <title></title>



        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->




         </head>
    <body>
      
     
  
        
            <button  type="button" class="btn btn-danger  float-right" data-toggle="modal" data-target="#myModalDelete">Delete
            </button>
      
    


      
    <table class = "table" >
            <tr>
                <td>app_id</td>
                <td>app_name</td>
                <td>app_age</td>
                <td>app_phone</td>
                <td>app_email</td>
                <!-- <td>app_department</td> -->
                <td>app_doctor</td>
                <td>app_date</td>
                <td>account</td>
                <td>arrive</td>
                <td>cancel</td>
            </tr>
            <?php
$count = 1;
while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                     <?php

$res2 = "Select count(*) as count from patient where p_name='{$row['app_name']}' and p_email='{$row['app_email']}'";
$result2 = mysqli_query($conn, $res2);
$row11 = mysqli_fetch_assoc($result2);
if ($days <= 0) {

    ?>
                                         <td>  <?=$row['app_id']?></td>
                                         <td>  <?=$row['app_name']?></td>
                                        <td><?=$row['app_age']?></td>
                                         <td>  <?=$row['app_phone']?></td>
                                         <td>  <?=$row['app_email']?></td>
                                       
                                         <!-- <td>  <?=$row['app_department']?></td> -->

                                         <td>  <?=$row['app_doctor']?></td>
                                       <td>  <?=$row['app_date']?></td>
                                        <?php if ($row11['count'] == '0') {
        ?>
                                          <?php

        $a_name = $row['app_name'];
        $a_email = $row['app_email'];
        $a_phone = $row['app_phone'];
        $a_doctor = $row['app_doctor'];
        $a_age = $row['app_age'];

        ?>



                        <td>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModalUpdate" onclick="getUpdate('<?php echo  $row['app_id'] . ',' . $row['app_name'] . ',' . $row['app_phone'] . ',' . $row['app_email'] .',' . $row['app_age'] .',' . $row['app_doctor'] ?>')">Account</button>
                        </td>
                        <td>

                                          <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="getId( '<?php echo $row['p_id'].','.$row['app_doctor'] ?>')" >arrive</button>
                                        </td>

                                        <td>
                                          <!-- <?php $app_id=$row['app_id'];
                                          echo $app_id; ?> -->
                                        <button type="button" name="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1" onclick="getAppId( '<?php echo $app_id ?>')">Cancel</button>


                                        </td>


                       <!--  <td> -->
                          
                      <!-- <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="getId(<?php echo $d ?>)">arrive</button>
                        </td>

                        <td>

                          <?php $app_id=$row['app_id'];
                                          echo $app_id; ?>
                                        <button type="button" name="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1" onclick="getAppId( '<?php echo strval($app_id )  ?>')">Cancel</button>



                        </td> -->

                       <?php } else {
                       $patient_link="Select * from patient where p_name='{$row['app_name']}' and p_email='{$row['app_email']}' ";
                        $patient_result = mysqli_query($conn, $patient_link);
                        $patient_row = mysqli_fetch_assoc($patient_result);
                        $doctor_array=[];
                        $doctor_array=explode(',', $patient_row['doctor_id']);
                        $alert= 'false';
                        foreach ($doctor_array as $var) {
                          if ($row['app_doctor'] == $var) {
                            $alert='true';
                          }
                        }

                        $doctor_string="";
                        if ($alert=='false') {
                            foreach ($doctor_array as $var) {
                              $doctor_string.=$var . ',' ;

                            }
                            $doctor_string.=$row['app_doctor'];
                            $update_doctor="UPDATE patient SET `doctor_id`='$doctor_string' WHERE p_name='{$row['app_name']}' and p_email='{$row['app_email']}'";
                             mysqli_query($conn, $update_doctor);
                        }


                        ?>
                        <td><p>account</p></td>
                         <td>

                                          <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="getId( '<?php echo $row['p_id'].','.$row['app_doctor'] ?>')" >arrive</button>
                                        </td>

                                        <td>
                                          <!-- <?php $app_id=$row['app_id'];
                                          echo $app_id; ?> -->
                                        <button type="button" name="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1" onclick="getAppId( '<?php echo $app_id ?>')">Cancel</button>


                                        </td>


                                     <?php
}} else {
    if ($row11['count'] != '0') {?>

                                         <td>  <?=$row['app_id']?></td>
                                         <td>  <?=$row['app_name']?></td>
                                         <td> <?=$row['app_age']?></td>
                                         <td>  <?=$row['app_phone']?></td>
                                         <td>  <?=$row['app_email']?></td>
                                         <!-- <td>  <?=$row['app_department']?></td> -->
                                         <td>  <?=$row['app_doctor']?></td>
                                         <td>  <?=$row['app_date']?></td>

                                          <td><p>account</p></td>
                                           <td>

                                          <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="getId( '<?php echo $row['p_id'].','.$row['app_doctor'] ?>')" >arrive</button>
                                        </td>

                                        <td>
                                          <!-- <?php $app_id=$row['app_id'];
                                          echo $app_id; ?> -->
                                        <button type="button" name="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1" onclick="getAppId( '<?php echo $app_id ?>')">Cancel</button>


                                        </td>

                                        
                                     <?php }}?>

                                        
                                          <?php 

                                          $paid=$row['p_id'];
                                          // echo $paid;
                                          $doctorid=$row['app_doctor'];
                                          $app=$row['app_id'];
                                          // $res = "SELECT * FROM appointment WHERE 'app_id'='$appid'";
                                          // $result = mysqli_query($conn, $res);
                                           ?>
                                          <!-- <td>

                                          <button type="button" name="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" onclick="getId( '<?php echo $row['p_id'].','.$row['app_doctor'] ?>')" >arrive</button>
                                        </td> -->

                                       <!--  <td> -->
                                          <!-- <?php $app_id=$row['app_id'];
                                          echo $app_id; ?> -->
<!--                                         <button type="button" name="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal1" onclick="getAppId( '<?php echo $app_id ?>')">Cancel</button>


                                        </td>
 -->


                </tr>

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
<form action="ArriveAdd.php" method="post">
  <h1><?php echo $doctorid.$app_id; ?></h1>
            <div class="form-group">
          <label for="weight">weight:</label>
          <input type="text" class="form-control" name="weight">
            </div>
              <div class="form-group">
          <label for="b_pressure">bloodpressure:</label>
          <input type="text" class="form-control" name="b_pressure">
          </div>
          <input type="hidden" name="app_id" value="<?php echo $app_id; ?>">
          <input type="hidden" name="app_doctor" value="<?php echo $doctorid; ?>">
        
          <button type="submit" class="btn btn-primary" >Submit</button>
          <!--  <input type="hidden" name="a_id" value="<?php echo $app_id; ?>"> -->
          </form>
          

        </div>
</div>
</div>
</div>

            <?php
endwhile?>
        </table>

    <div class="modal fade" id="myModalUpdate">
                                        <div class="modal-dialog modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Update Patient File</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                            <!-- Modal body -->
                                            <div class="modal-body" id="modal-body-update">
                                                <form action="accountupdate.php" method="POST">
                                                  <div class="form-group">
                                                    <label for="BloodType" >Blood Type:</label>
                                                    <select name="blood" class="custom-select" id="BloodType">
                                                    <option selected>Custom Select Menu</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="AB">AB</option>
                                                    <option value="O">O</option>

                                                  </select>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="allergy">Allergy Conditions:</label>

                                                  <textarea class="form-control" rows="5" id="allergy" name="allergy"></textarea>
                                                </div>
                                                  <input type="hidden" name="a_id" value="<?php echo $app_id; ?>">

                                                  <input type="hidden" name="a_name" value="<?php echo $a_name; ?>">
                                                  <input type="hidden" name="a_email" value="<?php echo $a_email; ?>">
                                                  <input type="hidden" name="a_age" value="<?php echo $a_age; ?>">
                                                  
                                                  <input type="hidden" name="a_phone" value="<?php echo $a_phone; ?>">
                                                  <input type="hidden" name="a_doctor" value="<?php echo $a_doctor; ?>">

                                                  <button type="submit" class="btn btn-primary">Submit</button>


                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                            </div>
                                        </div>
                                    </div>


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
<h4>Would you like to cancel it?</h4>

                
                <a href="cancel.php?id=<?php echo $id ?>" class="btn btn-success">yes</a>



<!-- 
                <button type="button" class="btn btn-danger" >no</button> -->
                <button type="btn-primary" class="close" data-dismiss="mod">no</button> 


              </div>


      </div>
    </div>
  </div>

                                    
                                    <script type="text/javascript">
                                        function getUpdate(){
                                          console.log('hello');
                                        }
                                        function getId(str) {
alert(str);
//   if (window.XMLHttpRequest) {
//      // code for IE7+, Firefox, Chrome, Opera, Safari
//      xmlhttp=new XMLHttpRequest();
//    } else {  // code for IE6, IE5
//      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//    }
//    xmlhttp.onreadystatechange=function() {
//      if (this.readyState==4 && this.status==200) {
//        document.getElementById("modal-body").innerHTML=this.responseText;
//      }
//    }
//    var aaa=str+','+'<?php echo strval($doctor_id); ?>';
// alert(aaa);

//    xmlhttp.open("GET","pArrivePreAdd.php?var="+aaa,true);
//    xmlhttp.send();
 }



                                    </script>





    <div class="modal fade" id="myModalDelete">
                                        <div class="modal-dialog modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Cancel all appointment.</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                            <!-- Modal body -->
                                            <div class="modal-body" id="modal-body-delete">
                                               
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                             <a href="delete_appointment.php?var=<?php echo($id);?>" class="btn btn-secondary">Okay</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                          </div>
                                        </div>
                                    </div>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2   /jquery.min.js"></script> -->
    <!--  <script type="text/javascript">
                      function getUpdate(str) {
                    console.log("dsadas");
                    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else {  // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("modal-body-update").innerHTML=this.responseText;
        }
      }
     // alert(str);

     xmlhttp.open("GET","preaccountapp.php?id="+str,true);
    xmlhttp.send();
    }


    </script> -->


        <!-- Modal footer -->




        
 </body>
    </html>


    <script>

</script>