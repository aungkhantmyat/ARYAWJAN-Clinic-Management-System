<?php 
include('connect.php');
$gender_ar=['male','female'];

$gender_armyan=['အမျိုးသား', 'အမျိုးသမီး'];

$mname_ar=['Aung','Khant','Myat','Min','Hein','Tun','Ye','Ko','Chan','Kyaw','Hlaing','Oo','Sai','Htet','Phyo','Thu','Zaw','Lin','Htoo','Maung','Thaw','Than','Swan','Saung','Lwin','Phone'];

$mname_armyan=['အောင်', 'ခန့်', 'မြတ်', 'မင်း', 'ဟိန်း', 'ထွန်း', 'ရဲ', 'ကို' ,'ချမ်း', 'ကျော်', 'လှိုင်','ဦး', 'စိုင်း', 'ထက်', 'ဖြိုး', 'သူ', 'ဇော်', 'လင်း', 'ထူး', 'မောင်', 'သော်', 'သန်း', 'စွမ်း', 'ဆောင်', 'လွင်', 'ဖုန်း'
];

$fname_ar=['Shwe','Sin','Myat','Thiri','Khaing','Khin','Nyo','Theint','Hnin','Nandar','Hlaing','Oo','Nan',
'San','Thazin','Phyo','Chue','Sint','Swe','Phwint','Sandar','Moe','Mon','May','Kyaw','Ei','Tun','Thwe','Zin',
'Soe'];

$fname_armyan=['ရွှ', 'ေစင်', 'မြတ်', 'သီရိ', 'ခိုင်', 'ခင်', 'ညို', 'သိမ့်', 'နှုင်း', 'နန္ဒာ', 'လှိုင်', 'ဦး', 'နန်း', 'ဆန်း', 'သဇင်', 'ဖြိုး', 'ခြူး', 'ဆင့်', 'ဆွေ', 'ပွင့်', 'စန္ဒာ', 'မိုး', 'မွန်', 'မေ', 'ကျော်', 'အိ', 'ထွန်း', 'သွယ်', 'ဇင်','စိုး'];

$township_ar=['North Dagon','North Oakkalar','South Oakkalar','Yankin','ahlon','Dagon','Kyauktada','Kyimyindaing','Lanmadaw','Seikkan','Latha','Pabedan','Sanchaung','Bahan','Thingangyun','Tamwe','Mingala Taungnyunt
','Botataung','Pazundaung','Hlaing','Kamayut','Mayangon','Insein','Thaketa','Mingaladon'];

$township_armyan=['မြောက်ဒဂုံ', 'မြောက်ဥဣလာ', 'တောင်ဥဣလာ', 'ရန်ကင်း', 'အလုံ', 'ဒဂုံ', 'ကျောက်တံတား',  'ကြည့်မြင်တိုင်', 'လမ်းမတော်', 'ဆိပ်ကမ်း', 'လသာ', 'ပ်းပဲတမ်း', 'စမ်းချောင်း','ဗဟန်း',' သင်္ကန်းကျွန်း ','တာမွေ', 'မင်္ဂလာတောင်ညွှန့် ','ဗိုလ်တစ်ထောင်', 'ပုဇွန်တောင်','လှိုင်', 'ကမာရွတ်', 'မရမ်းကုန်း', 'အင်းစိန်', 'သာကေတ', 'မင်္ဂလာဒုံ'];

$jyear_ar=['2013','2014','2015','2017','2018'];

$jyear_armyan=['၂၀၁၃', '၂၀၁၄', '၂၀၁၅', '၂၀၁၇', '၂၀၁၈'];

$ecity_ar=['Yangon','Mandalay','Magway','Taunggyi'];

$ecity_armyan=['ရန်ကုန်', 'မန္တလေး', 'မကွေး' ,'တောင်ကြီး'];

$certification_ar=['M.B.,B.S, M.Med.Sc (Surgery)/F.R.C.S (Edin), Dr.Med.Sc ( Surgery)','M.B.,B.S , M.Med.Sc, F.R.C.S (Edin)/FAHA (USA), FACC (USA)/Dr.Med.Sc  (Hon)','M.B.,B.S  , F.R.C.S (Edin)/Dr.Med.Sc, M.J.A.T.A (Japan)','M.B.,B.S, F.R.C.S/F.A.C.T.M, Dr.Med.Sc','M.B.,B.S, M.Med.Sc, MRCP(UK)/Dr.Med.Sc ,FRCP(Edin),/ Dip.Med.Edu','M.B.,B.S, M.Med.Sc (Int.Med),/M.R.C.P (UK)/Lecturer (University of medicine)'];

$rank_ar=['proffessor','specialist'];

$rank_armyan=['ပါမောက္ခ', 'ပါရဂူ'];

$salary_ar=['12500','10000'];

$salary_armyan=['၁၂၅၀၀', '၁၀၀၀၀'];

$dphoto_ar=['dmale.png','dfemale.png'];
$pphoto_ar=['pmale.png','pfemale.png'];
$blood_ar=['A+','A-','B','AB+','AB-','O'];
$docotr_time_ar=['(6:00-8:00)AM','(9:00-10:00)AM','(1:00-3:00)AM','(4:00-5:00)PM','(6:00-8:00)PM','(8:00-10:00)PM'];
$day_ar=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

$day_armyan=['တနင်္လာ', 'အင်္ဂါ', 'ဗုဒ္ဓဟူး', 'ကြာသပတေး','သောကြာ',' စနေ', 'တနင်္ဂနွေ'];

$drug_allergic_ar=['amoxicillin (Moxatag)','ampicillin','penicillin (Bicillin L-A)','tetracycline (Sumycin)','ibuprofen and naproxen','cetuximab (Erbitux)','rituximab (Rituxian)','abacavir (Ziagen)','nevirapine (Viramune)','Insulin','carbamazepine (Tegretol)','lamotrigine (Lamictal)'];

$dep_namemyan=['နှလုံးရောဂါခွဲစိတ်အထူးကုဆရာဝန်ကြီးများ','နှလုံးရောဂါအထူးကုဆရာဝန်ကြီးများ','အရေပြားအထူးကဆရာဝန်ကြီးများု','နား၊နှာခေါင်း၊လည်ချောင်းအထူးကုဆရာဝန်ကြီးများ',
'အထွေထွေအထူးကုဆရာဝန်ကြီးများ','အထွေထွေခွဲစိတ်အထူးကုဆရာဝန်ကြီးများ','အရေပြားအထူးကုဆရာဝန်ကြီးများ','သွေးရောဂါဆိုင်ရာအထူးကုဆရာဝန်ကြီးများ','အသည်း၊သည်း‌‌ခြေလမ်းကြောင်းဆိုင်ရာအထူးကဆရာဝန်ကြီးများု','မျက်နှာနှင့်မေးရိုးဆိုင်ရာခွဲစိတ်အထူးကဆရာဝန်ကြီးများု','ဆီးနှင့်ကျောက်ကပ်ဆိုင်ရာအထူးကဆရာဝန်ကြီးများု','ဦးနှောက်နှင့်အာရုံကြောခွဲစိတ်အထူးကုဆရာဝန်ကြီးများ','ဦးနှောက်နှင့်အာရုံကြောအထူးကဆရာဝန်ကြီးများု','အာယာရဆိုင်ရာအထူးကု','သားဖွားနှင့်မီးယပ်အထူးကု','ကင်ဆာရောဂါဆိုင်ရာအထူးကု','အရိုးအကြောအဆစ်ခွဲစိတ်','ကလေးခွဲစိတ်အထူးကဆရာဝန်ကြီးများု','ကလေးအထူးကုဆရာဝန်ကြီးများ','အကြောအဆစ်ပြန်လည်သန်စွမ်းရေးအထူးကုဆရာဝန်ကြီးများ','စိတ်ပိုင်းဆိုင်ရာအထူးကုဆရာဝန်ကြီးများ','ဓာတ်မှန်ဘက်ဆိုင်ရာအထူးကုဆရာဝန်ကြီးများ','ဆီးနှင့်ကျောက်ကပ်ခွဲစိတ်အထူးကုဆရာဝန်ကြီးများ',''];
$doctors_array = array();

for($i=1;$i<=45;$i++){
	$id='11'.$i;
	 $day='';
  $day_count=rand(1,3);
  for($j=0;$j<$day_count;$j++){

    if($j!=($day_count-1)){
       $day.=$day_ar[array_rand($day_ar,1)].", ";
     }else{
      $day.=$day_ar[array_rand($day_ar,1)]."";
     }

    
   }
   $docotr_time=$docotr_time_ar[array_rand($docotr_time_ar,1)];
   $doctors_array[]=array('day' => $day, 'time'=>$docotr_time,'id'=>$id);
	}

 ?>
 <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
       
         <tr>
          <th>id</th>
          
          <th>Day</th>
          <th>TIme</th>
         
          
        </tr>
      </thead>
      <tbody>
      <?php for($i=0;$i<45;$i++){
 ?>
        <tr>
          <td><?php echo $doctors_array[$i]["id"]; ?></td>
        
          <td><?php echo $doctors_array[$i]["day"]; ?></td>
          <td><?php echo $doctors_array[$i]["time"]; ?></td>
          
          
        </tr>
        <?php 
        $daya=$doctors_array[$i]["day"];
        $tima=$doctors_array[$i]["time"];
        $ida=$doctors_array[$i]["id"];
        $sql="UPDATE staff SET Day='$daya',Time='$tima'  WHERE Staff_Id='$ida'";
        mysqli_query($conn, $sql);

         ?>
         <?php } ?>
       
       
      </tbody>
    </table>
  </div>