<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>JavaScript Form validation</title>
<link rel="stylesheet" href="val.css">
<script>
  // Defining a function to display error message
  function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}



// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var password = document.contactForm.password.value;
    var phone = document.contactForm.phone.value;
    var number = document.contactForm.number.value;
    var text = document.contactForm.text.value;
    
    


    // Defining error variables with a default value
    var nameErr = emailErr = passwordErr = phoneErr = numberErr = textErr = true;
    

    // Validate name
    if(name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^(([A-Za-z]{1,10})?\s)+([A-Za-z]{1,10})?$/;         
        if(regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }


    // Validate password
    if(password == "") {
        printError("passwordErr", "Please enter your password");
    } else {
        // Regular expression for password validation
        var regex= /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{9,})/;

        if(regex.test(password) === false) {
            printError("passwordErr", "Please enter a valid password It must contain at least 9 characters including one capital letter,small letter and special character");
        } else{
            printError("passwordErr", "");
            passwordErr = false;
        }
      }


    // Validate mobile number
    if(phone == "") {
        printError("phoneErr", "Please enter your mobile number");
    } else {
          var regex = /^[0-9]{11}$/;
        if(regex.test(phone) === false) {
            printError("phoneErr", "Please enter a valid 11 digit mobile number");
        } else{
            printError("phoneErr", "");
            phoneErr = false;
        }
    }

     // Validate only number

    if(number == "") {
        printError("numberErr", "Please enter a number");
    } else {
         var regex = /\d+/;
        if(regex.test(number) === false) {
            printError("numberErr", "Please enter only number");
        } else{
            printError("numberErr", "");
            numberErr = false;
        }
    }

     // Validate text

    if(text == "") {
        printError("textErr", "Please enter text");
    } else {
         var regex=/^[a-zA-Z0-9!@#\$%\^&\*]{1,}$/;
         if(regex.test(text) === false)
         {
              printError("textErr","Please enter text..");

         }
         else{
          printError("textErr","");
          textErr = false;
         }
            printError("textErr", "");
            textErr = false;
        }
    
    if((nameErr || emailErr || passwordErr || phoneErr || numberErr || textErr) == true) {
       return false;
    } else
{
  alert("true");
  //return true;
}
};

 
 </script>

</head>
<body>
<form name="contactForm"  action="patientfile.php" onsubmit="return validateForm()"  method="post">  
  <h2>Form Validation</h2>

  <div class="row">
  <label>Name:</label> <input type="text" name="name" >
  <div class="error" id="nameErr"></div>
    </div>
<!--   <span class="error"> -->
 
  <div class="row">
  <label>E-mail: </label>
  <input type="text" name="email" >
  <div class="error" id="emailErr"></div>
    </div>
  

  <div class="row">
 <label> Password: </label><input type="password" name="password" >
  <div class="error" id="passwordErr"></div>
</div>
  

  <div class="row">
  <label>Phone:</label> <input type="text" name="phone" >
  <div class="error" id="phoneErr"></div>
</div>

  

  <div class="row">
   <label>Number(BP):</label>
    <input type="text" name="number">
  <div class="error" id="numberErr"></div>
</div>


  <div class="row">
    <label>
  Text:</label>
   <textarea name="text" rows="5" cols="40" ></textarea>
  <div class="error" id="textErr"></div>

  </div>

<button type="submit">Submit</button>
  
  <div class="row">
</form>
</body>
</html>

