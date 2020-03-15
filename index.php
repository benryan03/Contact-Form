<?php
$userFirstName = "";
$userLastName = "";
$userPhoneNumber = "";
$userEmail = "";

$userGender = "";

$firstNameError="";
$lastNameError="";
$phoneError="";
$emailError="";
$genderError = "";

if(!empty($_POST["submit"])){ //if submitted, then validate
    $userFirstName = trim($_POST["userFirstName"]); //trim() removes whitespace from both sides of input
    if (empty($userFirstName)){
        $firstNameError = "Please enter your first name";
    }
    $userLastName = trim($_POST["userLastName"]);
    if (empty($userLastName)){
        $lastNameError = "Please enter your last name";
    }
    $userEmail = trim($_POST["userEmail"]);
    if (empty($userEmail)){
        $emailError = "Please enter your e-mail address";
    }
    $userPhoneNumber = trim($_POST["userPhoneNumber"]);
    if (empty($userPhoneNumber)){
        $phoneError = "Please enter your phone number";
    }
    if (!isset($_POST["userGender"])){ 
        $genderError="Please select your gender";
    }
    else{
        $userGender = $_POST["userGender"];
    }
}
?>

<html>
<head>
<title>Contact Form</title>

<link rel="stylesheet" type="text/css" href="default.css">

</head>
<body>
<center>

<div class="header">
    <h1><a href="index.php">Contact Form</a></h1>
</div>

<div class="content">
    Enter your contact details:<br><br>
    <form class="contact-form" action="?" method="post">

        <input type="text" name="userFirstName" placeholder="First name" value="<?php echo htmlentities($userFirstName) ?>"><br>
        <span class="error"><?php echo "$firstNameError" ?></span><br><br>

        <input type="text" name="userLastName" placeholder="Last name" value="<?php echo htmlentities($userLastName) ?>"><br>
        <span class="error"><?php echo "$lastNameError" ?></span><br><br>

        <input type="text" name="userEmail" placeholder="E-mail address" value="<?php echo htmlentities($userEmail) ?>"><br>
        <span class="error"><?php echo "$emailError" ?></span><br><br>

        <input type="text" name="userPhoneNumber" placeholder="Phone number" value="<?php echo htmlentities($userPhoneNumber) ?>"><br>
        <span class="error"><?php echo "$phoneError" ?></span><br><br>

        <input type="radio" id="male" name="userGender" value="male" <?php echo ($userGender=="male")? "checked":""; ?> >
        <label for="male">Male</label>
        <input type="radio" id="female" name="userGender" value="female" <?php echo ($userGender=="female")? "checked":""; ?> >
        <label for="female">Female</label>
        <input type="radio" id="other" name="userGender" value="other" <?php echo ($userGender=="other")? "checked":""; ?> >
        <label for="other">Other</label><br>
        <span class="error"><?php echo $genderError ?></span><br><br>

        <input type="submit" value="Submit" name="submit">
        
    </form>
</div>

</center>
</body> 
</html> 