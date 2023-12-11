<?php 
include('connect.php');
$gender_ar=['male','female'];
$mname_ar=['Aung','Khant','Myat','Min','Hein','Tun','Ye','Ko','Chan','Kyaw','Hlaing','Oo','Sai','Htet','Phyo','Thu','Zaw','Lin','Htoo','Maung','Thaw','Than','Swan','Saung','Lwin','Phone'];
$fname_ar=['Shwe','Sin','Myat','Thiri','Khaing','Khin','Nyo','Theint','Hnin','Nandar','Hlaing','Oo','Nan',
'San','Thazin','Phyo','Chue','Sint','Swe','Phwint','Sandar','Moe','Mon','May','Kyaw','Ei','Tun','Thwe','Zin',
'Soe'];
$township_ar=['North Dagon','North Oakkalar','South Oakkalar','Yankin','ahlon','Dagon','Kyauktada','Kyimyindaing','Lanmadaw','Seikkan','Latha','Pabedan','Sanchaung','Bahan','Thingangyun','Tamwe','Mingala Taungnyunt
','Botataung','Pazundaung','Hlaing','Kamayut','Mayangon','Insein','Thaketa','Mingaladon'];
$jyear_ar=['2013','2014','2015','2017','2018'];
$ecity_ar=['Yangon','Mandalay','Magway','Taunggyi'];
$certification_ar=['M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)','M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)','M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)','M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc','M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu','M.B.,B.S, M.Med.Sc (Int.Med),/M.R.C.P (UK)/Lecturer (University of medicine)'];
$rank_ar=['proffessor','specialist'];
$salary_ar=['12500','10000'];
$dphoto_ar=['dmale.png','dfemale.png'];
$pphoto_ar=['pmale.png','pfemale.png'];
$blood_ar=['A+','A-','B','AB+','AB-','O'];
$drug_allergic_ar=['amoxicillin (Moxatag)','ampicillin','penicillin (Bicillin L-A)','tetracycline (Sumycin)','ibuprofen and naproxen','cetuximab (Erbitux)','rituximab (Rituxian)','abacavir (Ziagen)','nevirapine (Viramune)','Insulin','carbamazepine (Tegretol)','lamotrigine (Lamictal)'];
$doctors_array = array();

///////////////doctor/////////////////////////////////
for($i=1;$i<=10;$i++){
	$id='16'.$i;
	$gender=$gender_ar[array_rand($gender_ar,1)];
	$name='';
	if($gender=='male'){
		$word=rand(2,3);
		$name='U ';
		for($j=0;$j<$word;$j++){
			$name.=$mname_ar[array_rand($mname_ar,1)]." ";
		}
		$aa=strtolower(str_replace(" ","",strval( $name)));
		$email=$aa."@gmail.com";
		$photo='nursemale.png';
	}else{
		$word=rand(2,4);
		$name='Daw ';
		for($j=0;$j<$word;$j++){
			$name.=$fname_ar[array_rand($fname_ar,1)]." ";
		}
		$aa=strtolower(str_replace(" ","",strval( $name)));
		$email=$aa."@gmail.com";
		$photo='nursefemale.png';
	}
	$age=rand(30,60);
	$nrc=rand(1,14)."/";
	for($k=0;$k<6;$k++){
		$nrc.=rand(0,9);
			}
	$address=$township_ar[array_rand($township_ar,1)].", Yangon";
	$phone="09750";
	for($a=0;$a<6;$a++){
		$phone.=rand(0,9);
			}
	$joined_date=rand(1,28)."-".rand(1,12).'-'.$jyear_ar[array_rand($jyear_ar,1)];
	$education='BN(Yangon)';
	$certification=$certification_ar[array_rand($certification_ar,1)];
	$department=rand(1,23);
	$password='nurse123!@#';
	$var=array_rand($rank_ar,1);
	$rank=$rank_ar[$var];
	$salary='150000';

$doctors_array[]=array("id"=>$id,"name"=>$name,"gender"=>$gender,"email"=>$email,"photo"=>$photo,"age"=>$age,"nrc"=>$nrc,"phone"=>$phone,"address"=>$address,"joined_date"=>$joined_date,"education"=>$education,"certification"=>$certification,"department"=>$department,"password"=>$password,"rank"=>$rank,"salary"=>$salary);

}
////////////////doctor end.//////////////////////////////////////////////////
////////////////////patient//////////////////////
// for($i=1;$i<=100;$i++){
// 	$id='14'.$i;
// 	$gender=$gender_ar[array_rand($gender_ar,1)];
// 	$name='';
// 	if($gender=='male'){
// 		$word=rand(2,3);
// 		$name='U ';
// 		for($j=0;$j<$word;$j++){
// 			$name.=$mname_ar[array_rand($mname_ar,1)]." ";
// 		}
// 		$aa=strtolower(str_replace(" ","",strval( $name)));
// 		$email=$aa."@gmail.com";
// 		$photo='pmale.png';
// 	}else{
// 		$word=rand(2,3);
// 		$name='Daw ';
// 		for($j=0;$j<$word;$j++){
// 			$name.=$fname_ar[array_rand($fname_ar,1)]." ";
// 		}
// 		$aa=strtolower(str_replace(" ","",strval( $name)));
// 		$email=$aa."@gmail.com";
// 		$photo='pfemale.png';
// 	}
// 	$age=rand(15,60);
	
// 	$phone="09750";
// 	for($a=0;$a<6;$a++){
// 		$phone.=rand(0,9);
// 			}
	
// 	$blood=$blood_ar[array_rand($blood_ar,1)];
// 	$word1=rand(1,3);
// 		$drug_allergic='';
// 		for($j=0;$j<$word1;$j++){
// 			if($j!=($word1-1)){
// 				$drug_allergic.=$drug_allergic_ar[array_rand($drug_allergic_ar,1)].',';
// 			}else{
// 				$drug_allergic.=$drug_allergic_ar[array_rand($drug_allergic_ar,1)];
// 			}
			
// 		}
	
// 	$word2=rand(2,5);
// 		$doctor='';
// 		for($j=0;$j<$word2;$j++){
// 			if($j!=($word2-1)){
// 				$doctor.='11'.rand(1,45).',';
// 			}else{
// 				$doctor.='11'.rand(1,45);
// 			}
			
// 		}
	

// $patient_array[]=array("id"=>$id,"name"=>$name,"email"=>$email,"photo"=>$photo,"age"=>$age,"phone"=>$phone,"blood"=>$blood,"doctor"=>$doctor,"drug"=>$drug_allergic);

// }
/////////////////////patient end/////////////////////
for($i=0;$i<10;$i++){
	echo $doctors_array[$i]["id"].' / '.$doctors_array[$i]["name"].'<br>';
$sql = "INSERT INTO staff(Staff_Id, Name, Birthdate, NRC, Gender, Address, Phone, Email, Joined_Date, Education,Salary, Password, Type, Photo) VALUES ('{$doctors_array[$i]['id']}','{$doctors_array[$i]['name']}','{$doctors_array[$i]['age']}','{$doctors_array[$i]['nrc']}','{$doctors_array[$i]['gender']}','{$doctors_array[$i]['address']}','{$doctors_array[$i]['phone']}','{$doctors_array[$i]['email']}','{$doctors_array[$i]['joined_date']}','{$doctors_array[$i]['education']}','{$doctors_array[$i]['salary']}','{$doctors_array[$i]['password']}','nurse','{$doctors_array[$i]['photo']}')";
if(mysqli_query($conn, $sql)){
	echo "Success";
}
else{
	echo "Fail";
}

}





 ?>