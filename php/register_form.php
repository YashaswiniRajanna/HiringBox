<!-- <html>
    <head>
    <title > REGISTRATION FORM </title> 
</head>
    <body>
    <form method="post" action="register_submit.php">
      <div>
          <p> NAME:</p>
          <input type="text" name="name" placeholder="enter your name" /></br>
           <p> EMAIL  ID:</p>
             <input type="text" name="email" placeholder="Enter Your email" /></br>
           <p> PASSWORD: </p>
            <input type="password" name="password" placeholder="Enter Password" />
           <span style="color:blue"> <p>Forget Password?</p> </span>
           <input type="submit" name="submit" value="submit"/>
</form>
</body>

</div>
</html> -->


<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />
    <link href="main.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>

<body>
    <div class="v1_3">
        <div class="v1_4"></div><span class="v1_5">STUDENT REGISTRATION</span>
  <form action="register_submit.php" method="post" id="form">
        <div class="name"></div><span class="v1_10">REGISTRATION FORM</span><span class="v2_12" class="required">FIRST NAME  &#x2a;</span><span
            class="v2_13">MIDDLE NAME</span><span class="v2_14">LAST NAME</span>
            <input type="text" id="fname" name="fname" required >
            <input type="text" id="mname" name="mname">
            <input type="text" name="lname" id="lname" required>
       
        <span class="v2_19">DOB</span><span class="v2_20">ADDRESS</span>
        <input type="date" id="dob" name="dob" required>
        <input type="text" name="address" id="adress" >

     </div><span class="v2_22">CGPA</span>
        </div><span class="v2_24">PASSWORD</span>
        <span class="v2_27">MOBILE NUMBER</span>
        <input type="number" id="cgpa" name="cgpa" step=".001" required>
        <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <input type="number" id="mnum" name="mnum" name="mnum" required>
        <button type="submit" id="submit" form="form" href="https://mailchi.mp/d7d92857d16d/hiring-box">Submit</button>
        <button type="reset" id="reset">Reset</button>
      
    </form>
    
     </div>
     <div id="message" hidden>
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
    </div>
</body>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


</html>