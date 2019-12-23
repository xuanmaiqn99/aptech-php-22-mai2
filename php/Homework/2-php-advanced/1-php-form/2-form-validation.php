<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- FORM VALIDATION ---
 *
 * Validation is not easy, think about what kind of the data you wanna get, that's a good way to secure your website.
 *
 */
echo "<h1>2. FORM VALIDATION</h1>";
/*
 * EXERCISE 1 : Validations rules the form :
 * Name : Required + Must only contain letters.
 * Email : Required + Must contain a valid Email Address (with @ and .).
 * Gender : Required + Must select one.
 *
 */
/*
 * SUGGESTION : DO IT OUTSIDE the <?php ?>
 * Below the echo
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>
<?php
/*
$name = $email = $gender = "";
$nameErr = $emailErr = $genderErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (validateInput($_POST["name"])) {
$name = validateInput($_POST["name"]);
if (!preg_match("/^[a-zA-z ]*$/", $name)) {
$nameErr = "Only letters and white space allowed";
}
} else {
$nameErr = "Name field is required";
}
if (validateInput($_POST["email"])) {
$email = validateInput($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
} else {
$emailErr = "Email field is required";
}
if (validateInput($_POST["gender"])) {
$gender = validateInput($_POST["gender"]);
} else {
$genderErr = "Gender field is required";
}
}
function validateInput($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
} */
?>
<!-- <!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
Name : <input type="text" name="name" value="<?php if ($nameErr || $emailErr || $genderErr) {
                                              echo $name;
                                            } ?>" required>
<span style="color:red;"><?php echo $nameErr; ?></span>
<br>
Email : <input type="email" name="email" value="<?php if ($nameErr || $emailErr || $genderErr) {
                                                  echo $email;
                                                } ?>" required>
<span style="color:red;"><?php echo $emailErr; ?></span>
<br>
Gender : <input type="radio" name="gender" value="female" <?php if ($gender === "female" || empty($gender) || (!$nameErr && !$emailErr && !$genderErr)) {
                                                            echo "checked";
                                                          } ?>>Female
<input type="radio" name="gender" value="male" <?php if ($gender === "male" && ($nameErr || $emailErr || $genderErr)) {
                                                echo "checked";
                                              } ?>>Male
<span style="color:red;"><?php if ($nameErr || $emailErr || $genderErr) {
                          echo $genderErr;
                        } ?></span>
<br>
<button type="submit">Submit</button>
</form>
</body>
</html> -->
<?php
/* if (!$nameErr && !$emailErr && !$genderErr) {
echo "Your name is : $name<br>";
echo "Your email is : $email<br>";
echo "Your gender is : $gender";
$name = $email = $gender = '';
} */
?>
 
 !DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<?php
/*
echo "<h2>Your Input:</h2>";
echo ("Your name is: $name <br>");
echo "<br>";
echo ("Your email is: $email <br>");
echo "<br>";
echo ("Your gender is: $gender <br>");
*/
?>
<?php
if (!$nameErr && !$emailErr && !$genderErr) {
echo "Your name is : $name<br>";
echo "Your email is : $email<br>";
echo "Your gender is : $gender";
$name = $email = $gender = '';
}
?>
</body>
</html>