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
<ul class="nav justify-content-center nav-pills">
    <li class="nav-item">
     <a class="nav-link active" data-toggle="pill" href="#category">Home</a>
 </li>

    <li class="nav-item">
     <a class="nav-link " data-toggle="pill" href="#supplier">Staff</a>
 </li>
    <li class="nav-item">
     <a class="nav-link " data-toggle="pill" href="#medicine">Ambulance</a>
 </li>
  </ul>
  <div class="tab-content">
  <div class="tab-pane container active" id="category">
  	<div class="container">
  <h2>Home</h2>
  <br>
  <!-- Nav pills -->
  </div>
  </div>

  <div class="tab-pane container fade" id="supplier">
  	<div class="container">
  <h2><u><i><b>Staff</b></i></u></h2>
  <br>
  <div>
    <ul>
      <li><a href="doctor.php">Doctor</a></li><p><a href="doctor.php"><img src="doc.jpg"></a></p>
      <li><a href="nurse.php">Nurse</a></li><p><a href="nurse.php"><img src="nurse.jpg"></a></p>
      <li><a href="pharmacist.php">Pharmacist</a></li>
      <p><a href="pharmacist.php"><img src="pmcs.jpg"></a></p>
      <li><a href="hr.php">HR</a></li><p><a href="hr.php"><img src="hr.png"></a></p>
      
      </ul>

  </div>
  </div>
  </div>

  <!-- Nav pills -->
  
  <div class="tab-pane container fade" id="medicine">
  	<div class="container">
  <h2>Ambulance</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
   
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#addMedicine">Add Ambulance</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#addDriver">Add Driver</a>
    </li>


    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#viewMedicine">View Records</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    
    <div id="addMedicine" class="container tab-pane fade"><br>
      <h3>Add Ambulance</h3>
      <form action="">
      	<div class="row">
  <div class="col-sm">
  	 <div class="form-group">
      <label for="name">ID</label>
      <input type="text" class="form-control" id="name" placeholder="Enter ID" name="name">
    </div>
    <div class="form-group">
      <label for="category">Type</label>
    <select name="category" class="custom-select form-control " id="category">
    <option selected>--Select Ambulance Type--</option>
    <option value="volvo">Volvo</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
    </div>
     
      <label for="note">Note:</label>
     <textarea class="form-control" id="note" placeholder="Enter Note" name="note" ></textarea><br>
    </div>
    
    </div>

    
    
     <button type="submit" class="btn btn-primary">Submit</button>


   </form>
    </div>

    <div id="addDriver" class="container tab-pane fade"><br>
      <h3>Add Driver</h3>
      <form action="">
        <div class="row">
  <div class="col-sm">
     <div class="form-group">
      <label for="name">ID</label>
      <input type="text" class="form-control" id="name" placeholder="Enter ID" name="name">
     </div>

     <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">


    <div class="form-group">
      <label for="name">Age</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Age" name="name">
     </div>

     <div class="form-group">
      <label for="name">NRC</label>
      <input type="text" class="form-control" id="name" placeholder="Enter NRC" name="name">
     </div>

     <div class="form-group">
      <label for="name">Licence</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Licence" name="name">
     </div>

     <div class="form-group">
      <label for="name">Education</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Education" name="name">
     </div>


     </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    </div>
  

    
    <div id="viewMedicine" class="container tab-pane active"><br>
      <h3> Records</h3>
      <table class="table  table-hover">
    <thead>
       <tr>
        <th>Ambulance Type</th>
        <th>Ambulance ID</th>
        <th>Driver ID</th>
        <th>Driver Name</th>
        <th>Driver Age</th>
        <th>NRC</th>
        <th>Licence</th>
        <th>Education</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Audi</td>
        <td>6D/1234</td>
        <td>12</td>
        <td>Steven</td>
        <td>22</td>
        <td>12/1234</td>
        <td>123456</td>
        <td>high school</td>
        
        <td>
          <ul class="nav">

  <li class="nav-item">
    <button type="button" class="btn" data-toggle="modal" data-target="#myModalUpdate">
       <i class='fas fa-sync-alt' style='font-size:24px'></i>
    </button>
  
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