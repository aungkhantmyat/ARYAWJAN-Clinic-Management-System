    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "testingaq");

    //check account
    /*$check = "SELECT app_name,app_email from appointment";
    $result = mysqli_query($link, $check);
    $r1 = mysqli_fetch_assoc($result);
    $a_name = $r1['app_name'];
    $a_email = $r1['app_email'];

    $check2 = "SELECT p_name,p_email from patient";
    $result2 = mysqli_query($link, $check2);
    $r2 = mysqli_fetch_assoc($result2);
    $pp_name = $r2['p_name'];
    $pp_email = $r2['p_email'];*/
    // Check connection
    if ($link === false) {
    	die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution

    $date='2019-07-20';
    $now=date("Y-m-d");
    $ts1=strtotime($date);
    $ts2=strtotime($now);
    $timediff=$ts2-$ts1;
    $days=$timediff/86400;
    echo $days . "day";
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title> Appointment </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>



       
        <div class="container">
           
         <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>department</th>
                    <th>doctor</th>
                    <th>date</th>
                    <th>account</th>
                </tr>

            <?php
                $sql = "SELECT * FROM appointment";
                if ($result3 = mysqli_query($link, $sql)):
                     if (mysqli_num_rows($result3) > 0):
                     foreach ($result3 as $row):
    		?>
    				        <tr>
                                    <?php 

                                     $res="Select count(*) as count from patient where p_name='{$row['app_name']}' and p_email='{$row['app_email']}'";
                                     $result=mysqli_query($link,$res);
                                     $row11=mysqli_fetch_assoc($result);
                                   if($days<=0){
                                        
                                     ?>
    				                 <td>  <?=$row['app_id']?></td>
    				                 <td>  <?=$row['app_name']?></td>
    				                 <td>  <?=$row['app_email']?></td>
    				                 <td>  <?=$row['app_phone']?></td>
    				                 <td>  <?=$row['app_department']?></td>
    				                 <td>  <?=$row['app_date']?></td> 
                                     <td>  <?=$row['app_doctor']?></td>
                                   
                                    <?php if($row11['count']=='0'){ ?>
       
                    <td> <button class="btn btn-primary" data-toggle="modal" data-target="#myModalUpdate" onclick="getUpdate(
                    '<?php  echo $row['app_name'] . ',' . $row['app_email'] . ','. $row['app_phone'] . ',' . $row['app_doctor']  ?>')">account</button></td>
                   <?php }else{ ?>
                    <td><p>account</p></td>
                                
    				             <?php
                                 } }else{ 
                                 if($row11['count']!='0'){  ?>

                                     <td>  <?=$row['app_id']?></td>
                                     <td>  <?=$row['app_name']?></td>
                                     <td>  <?=$row['app_email']?></td>
                                     <td>  <?=$row['app_phone']?></td>
                                     <td>  <?=$row['app_department']?></td>
                                     <td>  <?=$row['app_date']?></td> 
                                     <td>  <?=$row['app_doctor']?></td>
                                      <td><p>account</p></td>

                                 <?php }} ?>
                                    

                              <?php    endforeach;?>
    		             <?php endif?>
                 <?php endif?>
                                
            </tr>

         </table>
     </div>
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

                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

         <script type="text/javascript">
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
    </script>
    </body>

    </html>