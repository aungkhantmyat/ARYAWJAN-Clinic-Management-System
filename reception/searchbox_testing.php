


<!DOCTYPE html>
<html>
  <head>

   <?php 
  include('include\cssExtend.php');
   ?>
  </head>
  <body>
   <?php 
  include('include\nav1.php');
   ?>
    
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="searchbox_testing.php"> <i class="icon-home"></i>View Appoinment                             </a></li>
            <li ><a href="bill.php"> <i class="icon-form"></i>Billing                           </a></li>
            <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts                             </a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Tables                             </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo
                <div class="badge badge-warning">6 New</div></a></li>
          </ul> -->
        <!-- </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul> -->
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item">Reception</a></li>
            <li class="breadcrumb-item active">View Appoinment       </li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <!-- <header> 
            <h1 class="h3 display">Testing</h1>
          </header> -->
          <div class="row">
          <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>View Appoinment</h4>
                </div>
                <div class="card-body">

                  <?php

$link = mysqli_connect("localhost", "root", "", "testingaq");

?>
<!DOCTYPE html>
<html>
<head>
  <title> Searching </title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>

  <div class="container" mt-3>
    <!-- <h2>View appointment</h2> -->
        
            
        
      <div class="col-md 6">
          <input class = "form-control mb-2 mr-sm-2" type="date" name="date" id="date" oninput="showHint(this.value)">
                
                
          <div id="doctorlist" >
          <select id="doctor" name="doctor" class="custom-select">
            <option value="">--Choose--</option>
          </select>
          </div>
                    
          <button class = "btn btn-primary mb-2 mr-sm-2" name = "btnSearch1" onclick="showtable()"> Search </button>
        
      </div>
  
  <div id="txtHint">
<table class = "table">
    <tr>
      <td>app_id</td>
      <td>app_name</td>
      <td>app_phone</td>
      <td>app_email</td>
      <td>app_department</td>
      <td>app_doctor</td>
      <td>app_date</td>
      <td>account</td>
      <td>arrive</td>
      <td>cancel</td>
    </tr>

      
  </table>

</div>
</div>

<script>
function showHint(str) {
  
    if (str.length == 0) { 
        document.getElementById("doctorlist").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("doctorlist").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "getdoctor.php?date="+str, true);
        xmlhttp.send();
    }
}
</script>

<script>
  function showtable() {
    var x=document.getElementById("date").value;
    var y=document.getElementById("doctor").value;
    var str=x + "," + y;
    
        if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "gettable.php?id="+str, true);
        xmlhttp.send();
    }
}

  </script>

  <script >

 
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
</body>
</html>

         
                  <div class="line"></div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </section>
      <?php 
  include('include\footer.php');
   ?>
    <!-- JavaScript files-->
   <?php 
  include('include\jsExtend.php');
   ?>
  </body>
</html>

