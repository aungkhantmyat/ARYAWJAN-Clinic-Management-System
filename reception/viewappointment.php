<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style type="text/css">
    .pills-orange-anm .nav-item .nav-link.active {
      background-color: #46a049 ;
      color:white;
      border-radius: 5px;
      box-shadow: 0 4px 8px 0 #e6e6e6, 0 6px 20px 0    #f2f2f2;

      -webkit-animation-name: orange; /* Safari 4.0 - 8.0 */
      -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */

    }
    .pills-orange-anm .nav-item .nav-link{
      color: #46a049;
    }
    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes orange {
      from {background-color: #5fb962 ;}
      to {background-color: #28a745;}
    }

    /* Standard syntax */
    @keyframes orange {
      from {background-color: #5fb962 ;}
      to {background-color:#28a745; }
    }
  </style>
  <?php 
  include('include\cssExtend.php');
  ?>
</head>
<body>

  <?php 
  include("config.php"); 
  include('include\nav1.php');
  ?>
  <ul id="side-main-menu" class="side-menu list-unstyled">                  
   
    <li ><a href="makeappointment.php">Make Appointment</a></li>
    <li class="active"><a href="viewappointment.php">View Appointment</a></li>
    <li><a href="bill.php">Billing</a></li>

  </ul>

  <?php 
  include('include\nav2.php');

  ?>

  <div class="container-fluid">
   <?php 
   include("config.php");
   ?>

   <!-- Page Heading -->
   <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin: 10px 0;">
    <div class="card-body">
     <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <ul class="breadcrumb">
            <li class="a"><a href="index.php">
             <ul class="nav">

               <li class="nav-item">

                 <i class="fas fa-fw fa-tachometer-alt" ></i>

               </li>
               <li class="nav-item">
                Dashboard
              </li>
            </ul>
          </a></li>

          <li class="a">View Appointment</li>
        </ul> 
      </div>
    </div>
  </div>



  <form class="form-inline" action="/action_page.php">
    <label for="edate" class="mb-2 mr-sm-2">Date:</label>
    <input type="date" class="form-control mb-2 mr-sm-2" id="date" placeholder="Enter Date" name="date">
    <label for="doctor" class="mb-2 mr-sm-2">Doctor:</label>
    <select name="doctor" id="department" class="custom-select mb-2 mr-sm-2">
      <option value="">-- Choose --</option>
    </select>

    <button type="submit" class="btn btn-success mb-2">Search</button>
  </form>
</div>
</div>

<div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin: 10px 0;">
  <div class="card-body">

    <h2>Appointments</h2>

    <div class="row">
      <div class="col">
        <div class="table-responsive">
         <table class="table  table-hover">
          <thead>
            <tr>

              <th>#</th>
              <th>Name</th>
              <th>Appointment Number</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Account</th>
              <th>Arrived</th>
              <th>Cancel</th>

            </tr>
          </thead>
          <div id="txtHint">
            <tbody>

              <tr>
                <td> </td>
                <td>Doe</td>
                <td>2</td>
                <td>john@example.com</td>
                <td>09788470241</td>
                <td>Yangon</td>
                <td> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalaccount">Account</button></td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalarrive">Arrived</button>

                  <div class="modal fade" id="modalarrive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Patient Arrived</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body mx-3">
         <form action="update/updateCategory.php" method="post">
                         <div class="form-group">
                          <label for="temperature">Body Temperature:</label>
                          <input type="text" class="form-control" id="temperature" placeholder="in Degrees" name="temperature">
                        
                      </div>
                      
                       <div class="form-group">
                        <label for="pulse">Pulse:</label>
                        <input type="text" class="form-control" id="pulse" placeholder="SpO2/HeartRate" name="pulse">
                      
                    </div>

                    
                     <div class="form-group">
                      <label for="bp">Blood Pressure:</label>
                      <input type="text" class="form-control" id="bp" placeholder="SYS/DIA" name="bp">
                    
                  </div>


                  <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-success">Done</button>
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
              </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCancel">Cancel</button>
          <!--Modal: modalConfirmDelete-->
          <div class="modal fade" id="modalCancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content text-center">
              <!--Header-->
              <div class="modal-header d-flex justify-content-center">
                <p class="heading">Are you sure you want to cancel?</p>
              </div>

              <!--Body-->
              <div class="modal-body">

                <i class="fas fa-times fa-4x animated rotateIn"></i>

              </div>

              <!--Footer-->
              <div class="modal-footer flex-center">
                <a href="" class="btn  btn-outline-danger">Yes</a>
                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
              </div>
            </div>
            <!--/.Content-->
          </div>
        </div>
        <!--Modal: modalConfirmDelete-->
      </td>



      <div class="modal fade" id="modalaccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Patient Basic Info</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <form action="update/updateCategory.php" method="post">
              <div class="form-group">
                <label for="drug">Drug Allergy:</label>
                <input type="text" class="form-control" id="drug" placeholder="Drug Names" name="drug">
              </div>



              <div class="form-group">
                <label for="btype">Blood Type:</label>
                <input type="text" class="form-control" id="btype" placeholder="A,B,O etc." name="btype">
              </div>










              <div class="modal-footer d-flex justify-content-center">

                <button type="submit" class="btn btn-success">Done</button>
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
              </form>
            </div>

          </div>
        </div>
      </div>









    </tr>


  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>




</div>
</section>
<?php 
include('include\footer.php');
include('include\jsExtend.php');

?>
</body>
</html>

