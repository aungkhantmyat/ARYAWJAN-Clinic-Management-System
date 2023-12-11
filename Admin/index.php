
<!DOCTYPE html>
<html>
  <head>

   <?php 
  include('include\cssExtend.php');
   ?>
  </head>
  <body>
   <?php 
   include("connect.php");
  include('include\nav1.php');
   ?>
    
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
           <li class="active"><a href="index.php"> <i class="icon-home"></i>Home</a></li>
            <li ><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Employees</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled">
                <li class="active"><a href="admin.php">Admin</a></li>
                <li ><a href="doctor.php">Doctor</a></li>
                <li ><a href="nurse.php">Nurse</a></li>
                <li><a href="hr.php">HR</a></li>
                <li><a href="driver.php">Driver</a></li>
                <li><a href="pharmacist.php">Pharmacist</a></li>
              </ul>
            </li>
            <li ><a href="equipment.php"> <i class="fa fa-cog"></i>Equipment</a></li>
            <li ><a href="car.php"> <i class="fa fa-ambulance"></i>Ambulance</a></li>
             <li><a href="editprofile.php"> <i class="fa fa-users"></i>Edit Profile</a></li>
            
            </ul>
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Forms</li>
          </ul>
        </div>
      </div>
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-1"></div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6"  style="margin: 0 3px">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Patients</strong><span></span>
                  <div class="count-number">100</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6"  style="margin: 0 3px">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-user-md"></i></div>
                <div class="name"><strong class="text-uppercase">Doctors</strong><span></span>
                  <div class="count-number">45</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6"  style="margin: 0 3px">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-medkit"></i></div>
                <div class="name"><strong class="text-uppercase">Pharmacists</strong><span></span>
                  <div class="count-number">10</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6"  style="margin: 0 3px">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-plus-square"></i></div>
                <div class="name"><strong class="text-uppercase">Receptionists</strong><span></span>
                  <div class="count-number">10</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6" style="margin: 0 3px">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Admin</strong><span></span>
                  <div class="count-number">10</div>
                </div>
              </div>
            </div>
           
          </div>

        </div>
      </section>
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
         
            <!-- Pie Chart-->
            <div class="col-lg-6 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Employee Report</h2>
                
                <div class="pie-chart">
                  <canvas id="pie-chartcanvas-1" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Patient Report</h2>
                <p>total patient numbers(2015-2019)</p>
                <div class="line-chart">
                  <canvas id="line-chartcanvas"></canvas>
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
       <script src="vendor/chart.js/Chart.min.js"></script>
   <script type="text/javascript">
    $("#form").hide();

$("#home").show();
function switchOne() {


$("#home").show(500);
$("#form").hide();
}

function switchThree() {
$("#form").show(500);
$("#home").hide();

}
</script>
<script type="text/javascript">
  $(function(){

  //get the line chart canvas
  var ctx = $("#line-chartcanvas");

  //line chart data
  var data = {
    labels: ["2015", "2016", "2017", "2018", "2019"],
    datasets: [
      {
        label: "Patients",
        data: [100, 75, 125, 110, 60],
        backgroundColor: "blue",
        borderColor: "lightblue",
        fill: false,
        lineTension: 0,
        radius: 5
      }
     
    ]
  };

  //options
  var options = {
    responsive: true,
    title: {
      display: false,
      position: "top",
      text: "Patient Graph",
      fontSize: 18,
      fontColor: "#111"
    }
    
  };

  //create Chart class object
  var chart = new Chart(ctx, {
    type: "line",
    data: data,
    options: options
  });
});
  $(function(){

  //get the pie chart canvas
  var ctx1 = $("#pie-chartcanvas-1");
 

  //pie chart data
  var data1 = {
    labels: ["doctor", "receptionist", "pharmacist", "admin"],
    datasets: [
      {
        label: "Employee",
        data: [45, 10, 10, 10],
        backgroundColor: [
          "#DEB887",
          "#A9A9A9",
          "#DC143C",
          "#F4A460"
         
        ],
        borderColor: [
          "#CDA776",
          "#989898",
          "#CB252B",
          "#E39371"
         
        ],
        borderWidth: [1, 1, 1, 1]
      }
    ]
  };

  
  //options
  var options = {
    responsive: true,
    title: {
      display: false,
      position: "top",
      text: "Pie Chart",
      fontSize: 18,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 16
      }
    }
  };

  //create Chart class object
  var chart1 = new Chart(ctx1, {
    type: "pie",
    data: data1,
    options: options
  });

  
});
</script>
    
  </body>
</html>

