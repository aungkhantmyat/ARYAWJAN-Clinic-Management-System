<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>


<div class="tab-content">
  <div class="tab-pane container active" id="supplier">
    <div class="container">

  <h2>Nurse</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
   
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#addsupplier">Add Nurse</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#viewRecord">View Records</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    
    <div id="addCategory" class="container tab-pane fade"><br>
      <h3>Add Nurse</h3>
      <form action="">
    <div class="form-group">
      <label for="Supplier">Nurse</label>
      <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
    </div>
     <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
    <div id="viewRecord" class="container tab-pane active"><br>
      <h3>View Records</h3>
      <table class="table  table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nurse Name</th>
        <th>Nurse Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Tablet</td>
        <td>10</td>
        <td>
          <ul class="nav">
  <li class="nav-item">
    <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
       <i class='fas fa-sync-alt' style='font-size:24px'></i>
    </button>
  </li>
   <li class="nav-item">
    <button type="button" class="btn">
       <i class='far fa-trash-alt' style='font-size:24px'></i>
    </button>
  </li>
</ul>
      </td>
      </tr>
     
   
    </tbody>
  </table>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update Nurse</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="">
    <div class="form-group">
      
      <input type="text" class="form-control" id="supplier" placeholder="Enter Nurse" name="nurse">
    </div>
     <button type="submit" class="btn btn-primary">Submit</button>
  </form>
        </div>
        
        <!-- Modal footer -->
        <!--div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div-->
        
      </div>
    </div>
  </div>
    </div>
  </div>
</div>

  </div>
  </body>
  </html>






<!-- Doctor -->
  <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Collapse content</title>
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

  <div>
    <ul>
      <li><a href="doctor.php">Doctor</a></li>
      <li><a href="pharmacist.php">Pharmacist</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="hr.php">HR</a></li>
      <li><a href="driver.php">Driver</a></li>
      <li><a href="nurse.php">Nurse</a></li>
      <li><a href="equipment.php">Equipment</a></li>
      <li><a href="car.php">Car</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>

  <div>
    <div id="tabs">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tabs-1">Home</a></li>
        <li><a href="#tabs-2">Insert</a></li>
        <li><a href="#tabs-3">View</a></li>
        
      </ul>
      <div id="tabs-1">
        
      </div>
      <div id="tabs-2">
        <form action="nurse_add.php" method="post" enctype="multipart/form-data">
            <label for="nurseList">Nurse List</label>
          <input type="text" name="nurseList" id="nurseList"><br>
                    
                    <label for="staffId">Staff Id</label>
          <input type="text" name="staffId" id="staffId"><br>
                    
                    <label for="name">Name</label>
          <input type="text" name="name" id="name"><br>

          <label for="birthdate">Birthdate</label>
          <input type="date" name="birthdate" id="birthdate"><br>

          <label for="nrc">NRC</label>
          <input type="text" name="nrc" id="nrc"><br>

          <label for="gender">Gender</label>
          <input type="radio" name="gender" value="male" checked> Male
          <input type="radio" name="gender" value="female"> Female <br>

          <label for="address">Address</label>
          <textarea name="address" id="address"></textarea><br>

          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone"><br>

          <label for="email">Email</label>
          <input type="email" name="email" id="email"><br>

          <label for="joinedDate">Joined Date</label>
          <input type="joinedDate" name="joinedDate" id="joinedDate"><br>

          <label for="education">Education</label>
          <textarea name="education" id="education"></textarea><br>

          <label for="certification">Certification</label>
          <textarea name="certification" id="certification"></textarea><br>

          <label for="rank">Rank</label>
          <input type="text" name="rank" id="rank"><br>

          <label for="department">Department</label>
          <select name="department" id="rank">
            <option value="0">-- Choose --</option>
            <option value="Heart">Heart</option>
            <option value="Brain">Brain</option>
            <option value="Cancer">Cancer</option>
          </select><br>
          <input type="hidden" name="type" value="nurse"><br>
          <input type="submit" value="Submit">
        </form>
      </div>
      <div id="tabs-3">
        <?php 
        include("connect.php");
        $res="SELECT * FROM Nurse";
        $result=mysqli_query($conn,$res);
        ?>

        <table class="table table-bordered">
        <thead>
          <tr>
            <th colspan="15">
            Nurse List
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            
          
            <th>Staff Id</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>NRC</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Joined Date</th>
            <th>Education</th>
            <th>Certification</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Password</th>
            <th>Rank</th>
          
            
          <?php 
          while($rows=mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
              <td><?php echo $rows['Staff_Id']; ?></td>
              <td><?php echo $rows['Name']; ?></td>
              <td><?php echo $rows['Birthdate']; ?></td>
              <td><?php echo $rows['NRC']; ?></td>
              <td><?php echo $rows['Gender']; ?></td>
              <td><?php echo $rows['Address']; ?></td>
              <td><?php echo $rows['Phone']; ?></td>
              <td><?php echo $rows['Email']; ?></td>
              <td><?php echo $rows['Joined_Date']; ?></td>
              <td><?php echo $rows['Education']; ?></td>
              <td><?php echo $rows['Certification']; ?></td>
              <td><?php echo $rows['Department']; ?></td>
              <td><?php echo $rows['Salary']; ?></td>
              <td><?php echo $rows['Password']; ?></td>
              <td><?php echo $rows['Rank']; ?></td>
              
              <td><button onclick="update(<?php echo $rows['Staff_Id'] ?>)" style="width:auto;">Update</button></td>
              <td><a href="delete.php?id=<?php echo $rows['Staff_Id']."/nurse"?>">Delete</a></td>
            </tr>
            <?php 
          }
          ?>
          </tbody>
        </table>
        <div id="id01" class="modal">
          
              
            </div>

            
      
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
    function update(str) {
       document.getElementById('id01').style.display='block';
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("id01").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","preupdate.php?id="+str,true);
  xmlhttp.send();
}
  </script>
  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

</body>
</html>




<!-- Pharmacist -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Collapse content</title>
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

  <div>
    <ul>
      <li><a href="doctor.php">Doctor</a></li>
      <li><a href="pharmacist.php">Pharmacist</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="hr.php">HR</a></li>
      <li><a href="driver.php">Driver</a></li>
      <li><a href="nurse.php">Nurse</a></li>
      <li><a href="equipment.php">Equipment</a></li>
      <li><a href="car.php">Car</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>

  <div>
    <div id="tabs">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tabs-1">Home</a></li>
        <li><a href="#tabs-2">Insert</a></li>
        <li><a href="#tabs-3">View</a></li>
        
      </ul>
      <div id="tabs-1">
        
      </div>
      <div id="tabs-2">
        <form action="pharmacist_add.php" method="post" enctype="multipart/form-data">
                    <label for="pharmacistList">Pharmacist_List</label>
          <input type="text" name="pharmacistList" id="pharmacistList"><br>

          <label for="staffId">Staff Id</label>
          <input type="text" name="staffId" id="staffId"><br>

          <label for="name">Name</label>
          <input type="text" name="name" id="name"><br>

          <label for="birthdate">Birthdate</label>
          <input type="date" name="birthdate" id="birthdate"><br>

          <label for="nrc">NRC</label>
          <input type="text" name="nrc" id="nrc"><br>

          <label for="gender">Gender</label>
          <input type="radio" name="gender" value="male" checked> Male
          <input type="radio" name="gender" value="female"> Female <br>

          <label for="address">Address</label>
          <textarea name="address" id="address"></textarea><br>

          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone"><br>

          <label for="email">Email</label>
          <input type="email" name="email" id="email"><br>

          <label for="education">Education</label>
          <textarea name="education" id="education"></textarea><br>

          <label for="certification">Certification</label>
          <textarea name="certification" id="certification"></textarea><br>

          <label for="rank">Rank</label>
          <input type="text" name="rank" id="rank"><br>

          <label for="department">Department</label>
          <select name="department" id="rank">
            <option value="0">-- Choose --</option>
            <option value="Heart">Heart</option>
            <option value="Brain">Brain</option>
            <option value="Cancer">Cancer</option>
          </select><br>
          <input type="hidden" name="type" value="pharmacist"><br>
          <input type="submit" value="Submit">
        </form>
      </div>
      <div id="tabs-3">
        <?php 
        include("connect.php");
        $res="SELECT * FROM pharmacist";
        $result=mysqli_query($conn,$res);
        ?>

        <table class="table table-bordered">
            <tr>
            <thead>
          <tr>
            <th colspan="17">
            Pharmacist List
            </th>
          </tr>
        </thead>
          <tbody>
          
            <th>Staff Id</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>NRC</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Joined Date</th>
            <th>Education</th>
            <th>Certification</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Password</th>
            <th>Rank</th>
            
            
          <?php 
          while($rows=mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
              <td><?php echo $rows['Staff_Id']; ?></td>
              <td><?php echo $rows['Name']; ?></td>
              <td><?php echo $rows['Birthdate']; ?></td>
              <td><?php echo $rows['NRC']; ?></td>
              <td><?php echo $rows['Gender']; ?></td>
              <td><?php echo $rows['Address']; ?></td>
              <td><?php echo $rows['Phone']; ?></td>
              <td><?php echo $rows['Email']; ?></td>
              <td><?php echo $rows['Joined_Date']; ?></td>
              <td><?php echo $rows['Education']; ?></td>
              <td><?php echo $rows['Certification']; ?></td>
              <td><?php echo $rows['Department']; ?></td>
              <td><?php echo $rows['Salary']; ?></td>
              <td><?php echo $rows['Password']; ?></td>
              <td><?php echo $rows['Rank']; ?></td>
              
              <td><button onclick="update(<?php echo $rows['Staff_Id'] ?>)" style="width:auto;">Update</button></td>
              <td><a href="delete.php?id=<?php echo $rows['Staff_Id']."/pharmacist"?>">Delete</a></td>
            </tr>
            <?php 
          }
          ?>
          </tbody>

        </table>
        <div id="id01" class="modal">
          
          
        </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
    function update(str) {
       document.getElementById('id01').style.display='block';
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("id01").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","preupdate.php?id="+str,true);
  xmlhttp.send();
}
  </script>
  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

</body>
</html>



<!-- HR -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Collapse content</title>
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

  <div>
    <ul>
      <li><a href="doctor.php">Doctor</a></li>
      <li><a href="pharmacist.php">Pharmacist</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="hr.php">HR</a></li>
      <li><a href="driver.php">Driver</a></li>
      <li><a href="nurse.php">Nurse</a></li>
      <li><a href="equipment.php">Equipment</a></li>
      <li><a href="car.php">Car</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>

  <div>
    <div id="tabs">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tabs-1">Home</a></li>
        <li><a href="#tabs-2">Insert</a></li>
        <li><a href="#tabs-3">View</a></li>
        
      </ul>
      <div id="tabs-1">
        
      </div>
      <div id="tabs-2">
        <form action="staff_add.php" method="post" enctype="multipart/form-data">
          <label for="name">Name</label>
          <input type="text" name="name" id="name"><br>

          <label for="birthdate">Birthdate</label>
          <input type="date" name="birthdate" id="birthdate"><br>

          <label for="nrc">NRC</label>
          <input type="text" name="nrc" id="nrc"><br>

          <label for="gender">Gender</label>
          <input type="radio" name="gender" value="male" checked> Male
          <input type="radio" name="gender" value="female"> Female <br>

          <label for="address">Address</label>
          <textarea name="address" id="address"></textarea><br>

          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone"><br>

          <label for="email">Email</label>
          <input type="email" name="email" id="email"><br>

          <label for="education">Education</label>
          <textarea name="education" id="education"></textarea><br>

          <label for="certification">Certification</label>
          <textarea name="certification" id="certification"></textarea><br>

          <label for="rank">Rank</label>
          <input type="text" name="rank" id="rank"><br>

          <label for="department">Department</label>
          <select name="department" id="rank">
            <option value="0">-- Choose --</option>
            <option value="Heart">Heart</option>
            <option value="Brain">Brain</option>
            <option value="Cancer">Cancer</option>
          </select><br>
          <input type="hidden" name="type" value="hr"><br>
          <input type="submit" value="Submit">
        </form>
      </div>
      <div id="tabs-3">
        <?php 
        include("connect.php");
        $res="SELECT * FROM HR";
        $result=mysqli_query($conn,$res);
        ?>

        <table class="table table-bordered"> 
          <tr>
            <thead>
          <tr>
            <th colspan="15">
            HR List
            </th>
          </tr>
        </thead>
        <tbody>
          
            <th>Staff Id</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>NRC</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Joined Date</th>
            <th>Education</th>
            <th>Certification</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Password</th>
            <th>Rank</th>
            
            
          <?php 
          while($rows=mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
              <td><?php echo $rows['Staff_Id']; ?></td>
              <td><?php echo $rows['Name']; ?></td>
              <td><?php echo $rows['Birthdate']; ?></td>
              <td><?php echo $rows['NRC']; ?></td>
              <td><?php echo $rows['Gender']; ?></td>
              <td><?php echo $rows['Address']; ?></td>
              <td><?php echo $rows['Phone']; ?></td>
              <td><?php echo $rows['Email']; ?></td>
              <td><?php echo $rows['Joined_Date']; ?></td>
              <td><?php echo $rows['Education']; ?></td>
              <td><?php echo $rows['Certification']; ?></td>
              <td><?php echo $rows['Department']; ?></td>
              <td><?php echo $rows['Salary']; ?></td>
              <td><?php echo $rows['Password']; ?></td>
              <td><?php echo $rows['Rank']; ?></td>
              
              <td><button onclick="update(<?php echo $rows['Staff_Id'] ?>)" style="width:auto;">Update</button></td>
              <td><a href="delete.php?id=<?php echo $rows['Staff_Id']."/hr"?>">Delete</a></td>
            </tr>
            <?php 
          }
          ?>
          </tbody>
        </table>
        <div id="id01" class="modal">
          
          
              
            </div>

            
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
    function update(str) {
       document.getElementById('id01').style.display='block';
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("id01").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","preupdate.php?id="+str,true);
  xmlhttp.send();
}
  </script>
  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

</body>
</html>




<!-- Car -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Collapse content</title>
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

  <div>
    <ul>
      <li><a href="doctor.php">Doctor</a></li>
      <li><a href="pharmacist.php">Pharmacist</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="hr.php">HR</a></li>
      <li><a href="driver.php">Driver</a></li>
      <li><a href="nurse.php">Nurse</a></li>
      <li><a href="equipment.php">Equipment</a></li>
      <li><a href="car.php">Car</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>

  <div>
    <div id="tabs">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tabs-1">Home</a></li>
        <li><a href="#tabs-2">Insert</a></li>
        <li><a href="#tabs-3">View</a></li>
        
      </ul>
      <div id="tabs-1">
        
      </div>
      <div id="tabs-2">
        <form action="car_add.php" method="post" enctype="multipart/form-data">
          <label for="carname">Car Name</label>
          <input type="text" name="carname" id="carname"><br>

          
          
          <input type="submit" value="Submit">
        </form>
      </div>
      <div id="tabs-3">
            <?php 
        include("connect.php");
        $res="SELECT * FROM car";
        $result=mysqli_query($conn,$res);
        ?>

        <table class="table table-bordered">
          <tr>
            <thead>
          <tr>
            <th colspan="2">
            Car List
            </th>
          </tr>
        </thead>
        <tbody>
          
            <th>Car Id</th>
            <th>Car Name</th>
            
            
            
          <?php 
          $num=1;
          while($rows=mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
              <td><?php echo $num; ?></td>
              <td><?php echo $rows['Car_Name']; ?></td>
              
              
              <td><button onclick="update(<?php echo $rows['Car_Id']; ?>)" style="width:auto;">Update</button></td>
              <td><button onclick="delete(<?php echo $rows['Car_Id']; ?>)" style="width:auto;">Delete</button></td>


<!-- /*<td><a href="car_delete.php?id=<?php echo $rows['Car_Id'];?>)"   >Delete</a></td>*/ -->
            </tr>
            <?php 
          $num=$num+1;}
          ?>
          </tbody>
        </table>
        <div id="id01" class="modal">
        
            </div>
      </div>
      
    </div>
  </div>
  <script type="text/javascript">
    function update(str) {
      document.getElementById('id01').style.display='block';
      if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("id01").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","car_preupdate.php?id="+str,true);
  xmlhttp.send();
}
</script>
<script src="jquery.js"></script>
<script src="jquery-ui.min.js"></script>
<script>  
  $("#tabs").tabs();
</script>

</body>
</html>






<!-- Driver -->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Collapse content</title>
  <link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
<body>

  <div>
    <ul>
      <li><a href="doctor.php">Doctor</a></li>
      <li><a href="pharmacist.php">Pharmacist</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="hr.php">HR</a></li>
      <li><a href="driver.php">Driver</a></li>
      <li><a href="nurse.php">Nurse</a></li>
      <li><a href="equipment.php">Equipment</a></li>
      <li><a href="car.php">Car</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>

  <div>
    <div id="tabs">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#tabs-1">Home</a></li>
        <li><a href="#tabs-2">Insert</a></li>
        <li><a href="#tabs-3">View</a></li>
        
      </ul>
      <div id="tabs-1">
        
      </div>
      <div id="tabs-2">
        <form action="staff_add.php" method="post" enctype="multipart/form-data">
          <label for="name">Name</label>
          <input type="text" name="name" id="name"><br>

          <label for="birthdate">Birthdate</label>
          <input type="date" name="birthdate" id="birthdate"><br>

          <label for="nrc">NRC</label>
          <input type="text" name="nrc" id="nrc"><br>

          <label for="gender">Gender</label>
          <input type="radio" name="gender" value="male" checked> Male
          <input type="radio" name="gender" value="female"> Female <br>

          <label for="address">Address</label>
          <textarea name="address" id="address"></textarea><br>

          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone"><br>

          <label for="email">Email</label>
          <input type="email" name="email" id="email"><br>

          <label for="education">Education</label>
          <textarea name="education" id="education"></textarea><br>

          <label for="certification">Certification</label>
          <textarea name="certification" id="certification"></textarea><br>

          <label for="rank">Rank</label>
          <input type="text" name="rank" id="rank"><br>

          <label for="department">Department</label>
          <select name="department" id="rank">
            <option value="0">-- Choose --</option>
            <option value="Heart">Heart</option>
            <option value="Brain">Brain</option>
            <option value="Cancer">Cancer</option>
          </select><br>
          <input type="hidden" name="type" value="driver"><br>
          <input type="submit" value="Submit">
        </form>
      </div>
      <div id="tabs-3">
        <?php 
        include("connect.php");
        $res="SELECT * FROM staff WHERE Type='driver'";
        $result=mysqli_query($conn,$res);
        ?>

        <table class="table table-bordered">
          <tr>
          <thead>
          <tr>
            <th colspan="15">
            Driver List
            </th>
          </tr>
        </thead>
        <tbody>
          
            
            <th>Staff Id</th>
            <th>Name</th>
            <th>Birthdate</th>
            <th>NRC</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Joined Date</th>
            <th>Education</th>
            <th>Certification</th>
            <th>Department</th>
            <th>Salary</th>
            <th>Password</th>
            <th>Rank</th>
            <th></th>
            
            
          </tr>
          <?php 
          while($rows=mysqli_fetch_assoc($result))
          {
            ?>
            <tr>
              <td><?php echo $rows['Staff_Id']; ?></td>
              <td><?php echo $rows['Name']; ?></td>
              <td><?php echo $rows['Birthdate']; ?></td>
              <td><?php echo $rows['NRC']; ?></td>
              <td><?php echo $rows['Gender']; ?></td>
              <td><?php echo $rows['Address']; ?></td>
              <td><?php echo $rows['Phone']; ?></td>
              <td><?php echo $rows['Email']; ?></td>
              <td><?php echo $rows['Joined_Date']; ?></td>
              <td><?php echo $rows['Education']; ?></td>
              <td><?php echo $rows['Certification']; ?></td>
              <td><?php echo $rows['Department']; ?></td>
              <td><?php echo $rows['Salary']; ?></td>
              <td><?php echo $rows['Password']; ?></td>
              <td><?php echo $rows['Rank']; ?></td>
              <td><button onclick="update(<?php echo $rows['Staff_Id'] ?>)" style="width:auto;">Update</button></td>
              <td><a href="delete.php?id=<?php echo $rows['Staff_Id']."/driver"?>">Delete</a></td>
            </tr>
            <?php 
          }
          ?>
          </tbody>
        </table>
        <div id="id01" class="modal">
        
            </div>

            
          
        </div>
      </div>
      
    
  </div>
  <script type="text/javascript">
    function update(str) {
       document.getElementById('id01').style.display='block';
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("id01").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","preupdate.php?id="+str,true);
  xmlhttp.send();
}
  </script>
  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

  <script src="jquery.js"></script>
  <script src="jquery-ui.min.js"></script>
  <script>  
    $("#tabs").tabs();
  </script>

</body>
</html>