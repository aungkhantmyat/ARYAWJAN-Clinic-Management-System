<?php 


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
	<input type="text" name="email" placeholder="enter email" id="name">
	<br>
	<input type="password" name="password" placeholder="password">
	
	<button onclick="dd()">aa</button>
	<div class="akm"></div>


<script type="text/javascript">
  	function dd() {
  		alert('dfsf');
  		var info=document.getElementById('name').value;

 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
  	if (this.readyState==4 && this.status==200) {
  		document.getElementById('akm').innerHTML=this.responseText;
  	}
  }
  xmlhttp.open("GET","gettesting1.php?id="+info,true);
  xmlhttp.send();
 	}
 	

</script>
 </body>
 </html>