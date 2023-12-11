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
  <div class="tab-pane container active" id="category">
    <div class="container">
    

  </div>
  <h2>Doctor</h2>
  <br>
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">
   
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#addCategory">Add Doctor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#viewRecord">View Records</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    
    <div id="addCategory" class="container tab-pane fade"><br>
      <h3>Add Doctor</h3>
      <form action="">
    <div class="form-group">
      <label for="Category">Doctor</label>
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
        <th>Doctor Name</th>
        <th>Doctor Number</th>
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
          <h4 class="modal-title">Update Doctor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form action="">
    <div class="form-group">
      
      <input type="text" class="form-control" id="category" placeholder="Enter Category" name="category">
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