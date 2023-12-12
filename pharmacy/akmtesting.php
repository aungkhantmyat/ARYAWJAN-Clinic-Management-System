<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	

	</style>
  <!-- Datatable CSS -->
<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Datatable JS -->
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<?php 
	include('include\cssExtend.php');
	 ?>
</head>
<body>
<?php 
include('include\nav.php');
?>


        <div class="container-fluid">
          <div >
   <!-- Custom Filter -->
   <table>
     <tr>
       <td>
         <input type='text' id='searchByName' placeholder='Enter name'>
       </td>
       <td>
         <select id='searchByGender'>
           <option value=''>-- Select Gender--</option>
           <option value='male'>Male</option>
           <option value='female'>Female</option>
         </select>
       </td>
     </tr>
   </table>

   <!-- Table -->
   <table id='empTable' class='display dataTable'>
     <thead>
       <tr>
        <th>Name</th>

                    <th>Email</th>

                    <th>Gnder</th>
                    <th>NRC</th>
                    <th>Address</th>
                    
                   
       </tr>
     </thead>

   </table>
</div>

         </div>
      </section>
<?php 
include('include\footer.php');
include('include\jsExtend.php');

?>
<script type="text/javascript">
  $(document).ready(function(){
  var dataTable = $('#empTable').DataTable({
    'processing': true,
    'serverSide': true,
    'serverMethod': 'post',
    //'searching': false, // Remove default Search Control
    'ajax': {
       'url':'ajaxfile.php',
       'data': function(data){
          // Read values
          var gender = $('#searchByGender').val();
          var name = $('#searchByName').val();

          // Append to data
          data.searchByGender = gender;
          data.searchByName = name;
       }
    },
    'columns': [
       { data: 'emp_name' }, 
       { data: 'email' },
       { data: 'gender' },
       { data: 'NRC' },
       { data: 'city' },
    ]
  });

  $('#searchByName').keyup(function(){
    dataTable.draw();
  });

  $('#searchByGender').change(function(){
    dataTable.draw();
  });
});
</script>
  
</body>
</html>