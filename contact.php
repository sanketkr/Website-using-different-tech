<!-- <?php
$errormessege="";
if($_POST){
if (!($_POST["name"])) {
  $errormessege .= "- Name is required.<br>";
}

if (!(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) )) {

  $errormessege .= "- Invalid email format<br>";
}

if (!($_POST["messege"])) {

  $errormessege .= "- messege is required<br>";
}



}


 ?> -->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="contact.css">
  <link href="jqueryui/jquery-ui.css" rel="stylesheet">


  <script src="jquery.js"></script>
  <script src="jqueryui/external/jquery/jquery.js"></script>
<script src="jqueryui/jquery-ui.js"></script>


  <title>CONTACT</title>
</head>

<body>
<nav>
<div class="logo">
  <img src="logo.png" alt="">
</div>

</nav>


<div class="contact">

<!-- Js validation is replaced with required attrb in input fields although validation code is commented below. I will be using server side for validation -->
<form method="post">

  <table>
    <tr>
      <td>
        <label for="name">Name:-</label>
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" name="name" id="name" placeholder="ID name" required/>
      </td>
    </tr>
    <tr>
      <td>
        <label for="email">Email:-</label>
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" name="email" id="email" placeholder="eg@example.com" required />
      </td>
    </tr>
    <tr>
        <td>
          <label for="messege">Messege:-</label>
        </td>
    </tr>
    <tr>
      <td>
        <textarea name="messege" id="messege" required ></textarea>
      </td>
    </tr>
    <tr>
      <td>
        <input type="submit" id="submit" value="Send">
      </td>
    </tr>

  </table>
</form>
<div >
  <p class="erroemessege"><?php echo $errormessege; ?></p>

</div>

</div>

<!-- <script type="text/javascript">

< this is Js validation code >

// isEmail function returns true or false if argument 'email' is a correct format oro not.


function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}


$("#submit").click(function(){
var nameError="";
var emailError="";
var messegeError="";
  if (isEmail($("#email").val()) == false) {

  emailError+="Enter a  valid Email.";
  }
  if (!($("#name").val())) {
    nameError+="Enter a valid name."
  }
  if (!($("#messege").val())) {
    messegeError+="Enter a valid messege.";
  }
  if (nameError || emailError || messegeError ) {
    alert(nameError + "\n" + emailError+ "\n" + messegeError  );
  }
  if (nameError == "" && emailError == "" && messegeError=="" ) {
    alert("\n Your messege has beene sent.");
  }

})




</script> -->


</body>
</html>
