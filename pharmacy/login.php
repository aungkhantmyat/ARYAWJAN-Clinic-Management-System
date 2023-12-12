<?php 
 session_start();  
 include("config.php");


$email=$_POST['email'];
$password = $_POST['password'];
$res="SELECT count(*) as total FROM staff WHERE Email='$email' and Password='$password' ";

$result=mysqli_query($conn,$res);
$row=mysqli_fetch_assoc($result);
$alert1=$row['total'];

 $res2="SELECT count(*) as total FROM patient WHERE p_email='$email' and p_password='$password'";
$result2=mysqli_query($conn,$res2);
$row2=mysqli_fetch_assoc($result2);
$alert2=$row2['total'];

if($alert1==0 and $alert2==0){
  echo "Email or Password is wrong!";
}
elseif ($alert1==1 and $alert2==0) {
  $resa="SELECT * FROM staff WHERE Email='$email' and Password='$password' ";

$resulta=mysqli_query($conn,$resa);
$rowa=mysqli_fetch_assoc($resulta);
  if($rowa['Type']=='doctor'){
    $_SESSION['doctor_id']=$rowa['Staff_Id'];
      $_SESSION['doctor_name']=$rowa['Name'];
      $_SESSION['auth']=1;
      echo "<script>alert('Logged in Successfully!')</script>";
      header("location: ..\Doctor\atreatment.php");
  }elseif ($rowa['Type']=='pharmacist') {
    $_SESSION['phar_id']=$rowa['Staff_Id'];
      $_SESSION['pharmacy_name']=$rowa['Name'];
      $_SESSION['auth']=1;
      echo "<script>alert('Logged in Successfully!')</script>";
      header("location:category.php");
  } elseif ($rowa['Type']=='admin'){
    $_SESSION['admin_id']=$rowa['Staff_Id'];
      $_SESSION['admin_name']=$rowa['Name'];
      $_SESSION['auth']=1;
      echo "<script>alert('Logged in Successfully!')</script>";
      header("location: ../Admin/doctor.php");
  }else{
     $_SESSION['nurse_id']=$rowa['Staff_Id'];
      $_SESSION['nurse_name']=$rowa['Name'];
      $_SESSION['auth']=1;
      echo "<script>alert('Logged in Successfully!')</script>";
      header("location: ../reception/bill.php");
  }
}elseif ($alert1==0 and $alert2==1) {
  $resb="SELECT * FROM patient WHERE p_email='$email' and p_password='$password' ";

$resultb=mysqli_query($conn,$resb);
$rowb=mysqli_fetch_assoc($resultb);
  $_SESSION['p_id']=$rowb['p_id'];
      $_SESSION['p_name']=$row['p_name'];
      $_SESSION['auth']=1;
      echo "<script>alert('Logged in Successfully!')</script>";
  
    header("location: ..\Patient\book_view.php"); 
}


  
   // if($name == "admin" and $password == "admin") 
   // 	{   
   // 	 $_SESSION['auth'] = true;   
   // 	 header("location: ..\Admin\index.php"); 
   // 	  } 
   // 	 else if($name == "pharmacy" and $password == "pharmacy") 

   //     {
   //      $_SESSION['auth'] = true;  
   //      header("location: testing.php"); 
   //     }
   // 	else {  
   // 	  header("location: loginform.php"); 
   // 	    }

   	     ?>
