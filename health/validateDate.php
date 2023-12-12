<?php 

$q = $_GET['q'];
//$r= $_GET['r'];
$tmp=[];
$tmp=explode(',', $q);
$doctor=$tmp[0];
$date=$tmp[1];

include('config.php');
$result = mysqli_query($conn, "SELECT *
            FROM staff WHERE staff_Id='$doctor'");
$row = mysqli_fetch_assoc($result);
$day=$row['Day'];
$day_ar=[];
$day_ar=explode(',', $day);
$now=date("Y-m-d");
$ts1 = strtotime($date);
$ts2 = strtotime($now);

$d_diff = ($ts1 - $ts2)/86400;

 $t_day=date_format(date_create($date),"l");
 
if($d_diff>0){
	if($d_diff>5){
		echo "date is over 5";
	}else{
		$alert='f';
		foreach ($day_ar as $var) {
			if($var==$t_day){
				$alert='t';
			}
		}
		if($alert=='f'){?>
			<p  class="text-danger">*day is not valid</p>
			
		<?php  }
	}

}else{ ?>
	<p class="text-danger">*date is not valid</p>

<?php }  ?>