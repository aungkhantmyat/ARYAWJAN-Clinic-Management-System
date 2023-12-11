<?php 
$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='project';

	//$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	$conn=new mysqli($dbhost,$dbuser,$dbpass) or die("You are not connected");
	mysqli_select_db($conn,$dbname);
$res="SELECT * FROM staff";
$result=mysqli_query($conn,$res);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
   /* bootstrap links colors*/ .pagination > li > a, .pagination > li > span { color: green; // use your own color here }

.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover { background-color: green; border-color: green; }

  </style>
	   <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" >
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"  ></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>

<div class="container">
  <h2>Dark Striped Table</h2>
  <p>Combine .table-dark and .table-striped to create a dark, striped table:</p> 
  <div class="table-responsive">           
  <table id="employee" class="table  table-bordered table-striped  table-hover">
    <thead class="thead-dark">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
         <th>Phone</th>
          <th>Address</th>
         <th>Phone</th>
          <th>Address</th>
         <th>Phone</th>
        <th>Salary</th>
         <th>Action</th>


      </tr>
    </thead>
    <tbody>
    	<?php  
    while ($row=mysqli_fetch_assoc($result)) {
    
    	 ?>
      <tr>
        <td><?php echo $row['Name']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['Address']; ?></td>
         <td><?php echo $row['Phone']; ?></td>
         <td><?php echo $row['Address']; ?></td>
         <td><?php echo $row['Phone']; ?></td>
         <td><?php echo $row['Address']; ?></td>
         <td><?php echo $row['Phone']; ?></td>
        <td><?php echo $row['Salary']; ?></td>
        <td><button class="btn btn-success">Edit</button></td>
        
      </tr>
     <?php  }?>
    </tbody>
  </table>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#employee').DataTable();
	});
</script>
</body>

</html>