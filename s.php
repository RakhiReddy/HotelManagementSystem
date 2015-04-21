<!DOCTYPE HTML> 
<html>
<head>
<style>

body {
background-image: url("81.jpg");
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: ;
        color:white;
background-repeat: no-repeat;
        background-size: 100%;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
 text-align: center;
    margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
text-align: center;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
    text-align: center;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
    text-align: center;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
a 
{
text-decoration:underline;
color:white;
font-weight:bold;
font-size: 15pt;
}
    .error
    {font-size:20px;
    color:#0e2a52;
    }
   
    fieldset
    {
        height:550px;
        width:40%;
        text-align:center;
        margin-left:400px; 
        border:7px ridge rgba(117, 227, 208, 0.47);
        padding:1em;
        background-color:hsla(235, 48%, 48%, 0.32);
        
    }
    legend
    {
        font-size:25px; 
        text-decoration:underline;
    }
    .error
    {
     color:white;
    }
</style>


</head>

</style>
</head>

<body> 

<p align="right" style="margin-top:10px;">
<a href="main.html">HOME |</a>
<a href="userlogin.html">MEMBERS |</a>
<a href=""> </a> 
<a href=""> </a>
<a href=""> </a>

    
<?php

// define variables and set to empty values
$fnameErr = $lnameErr = $emailErr = $passwordErr = $genderErr = "";
$fname = $lname = $email = $password  = $gender = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["fname"]))
     {
     $fnameErr = "Name is required";
      }
   else
     {
     $fname = test_input($_POST["fname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$fname))
       {
       $fnameErr = "Only letters and white space allowed"; 
       }}

	
    
   if (empty($_POST["lname"]))
     {$lnameErr = "Name is required";}
   else
     {
     $lname = test_input($_POST["lname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$lname))
       {
       $lnameErr = "Only letters and white space allowed"; 
       }
	}
	
     if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 
       }
     }


   if (empty($_POST["gender"]))
     {$genderErr = "Gender is required";}
   else
     {$gender = test_input($_POST["gender"]);}
     
     
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>

<div class="container">

<fieldset ><legend>SIGN UP</legend>
<form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<h2 class="form-signin-heading" style="text-align:center;margin-top:40px;"></h2>
<p style="text-align=center;"><span class="error"> * these fields are mandatory.</span></p> 
  
  
   <input type="text" name="fname" value="<?php echo $fname;?>" class="form-control" placeholder="First name" required autofocus>
   <span class="error">* <?php echo $fnameErr;?></span>
   <br>
   
   <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control" placeholder="Last name" required autofocus>
   <span class="error">* <?php echo $lnameErr;?></span>
   <br>
   
   <input type="date" class="form-control" name="dob" placeholder="Date of birth" required autofocus />
   <br>

   <input type="email" name="email" value="<?php echo $email;?>" class="form-control" placeholder="Email address" required autofocus>
   <span class="error">* <?php echo $emailErr;?></span>
   <br>
   
   Gender:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br>

   <input type="password" class="form-control" placeholder="Password" name="password" required><br>
   <input type="password" class="form-control" placeholder="Re-enter password" name="re" required autofocus>
   <br>
   
    <label class="checkbox" style="color:;">
    <input type="checkbox" value="remember-me" > Remember me
    </label><br><br>
    <button class="btn btn-lg btn-primary btn-block" type="submit" style="text-align:center;" formaction="signup1.php">Submit</button>

</form>
    </fieldset>
</div>

</body>
</html>
