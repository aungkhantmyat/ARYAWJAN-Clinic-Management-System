 //////////////////Category////////////////////////////////
 function getUpdateCategory(str) {
    console.log(str);
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET",'update/preupdateCategory.php?num='+str,true);
  xmlhttp.send();
}
function showHintCategory(str) {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "update/gethintCategory.php?q=" + str, true);
  xmlhttp.send();
  
}
///////////////Supplier////////////////////////////
 function getUpdateSupplier(str) {
  console.log(str);
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","update/preupdateSupplier.php?id="+str,true);
  xmlhttp.send();
}
/////////////////////////Medicine/////////////////////////////////
 function getStockMedicine(str) {
  console.log(str);
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-stock").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","update/preAddStock.php?id="+str,true);
  xmlhttp.send();
}
  function getInfoMedicine(str) {
  console.log(str);
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-info").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","info/infoMedicine.php?id="+str,true);
  xmlhttp.send();
}
 function getUpdateMedicine(str) {
  console.log(str);
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-update").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","update/preupdateMedicine.php?id="+str,true);
  xmlhttp.send();
}
/////////////////////////////////////sell//////////////////////////
   

  function getPatientName() {
  console.log(str);
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("modal-body-update").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","update/preupdateMedicine.php?id="+str,true);
  xmlhttp.send();
}
