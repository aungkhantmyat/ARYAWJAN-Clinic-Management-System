<?php
include 'connect.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$searchByName = $_POST['searchByName'];
$searchByGender = $_POST['searchByGender'];

## Search 
$searchQuery = " ";
if($searchByName != ''){
   $searchQuery .= '  (Name like "%'.$searchByName.'%" ) ';
}
if($searchByGender != ''){
   $searchQuery .= ' and (Gender="'.$searchByGender.'") ';
}
if($searchValue != ''){
   $searchQuery .= ' and (Name like "%'.$searchValue.'%"" or 
      Email like "%'.$searchValue.'%"" or 
      Address like"%'.$searchValue.'%"" ) ';
}

## Total number of records without filtering
$sel = mysqli_query($conn,"select count(*) as allcount from staff");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($conn,"select count(*) as allcount from staff WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from staff WHERE ".$searchQuery;
$empRecords = mysqli_query($conn, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = array(
     "emp_name"=>$row['Name'],
     "email"=>$row['Email'],
     "gender"=>$row['Gender'],
     "NRC"=>$row['NRC'],
     "city"=>$row['Address']
   );
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

echo json_encode($response);