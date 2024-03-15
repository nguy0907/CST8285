<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome</title>
</head>
<body>
    <a href="../welcome.php?firstName=ExampleFirstName"> $_GET</a>
    <a href="../welcome.php?lastName=ExampleLastName"> $_GET</a>

<?php if ("../welcome.php?firstName=ExampleFirstName"){
    echo "Howdy " .  $_GET['firstName'] ;
} else if ("../welcome.php?lastName=ExampleLastName"){
    echo "Howdy " .  $_GET['lastName'] ;
}

?>


<h1>If you want a custom greeting message, please do the following: </h1>
<fieldset>
<ol>
<li>In your address bar, append a '?' symbol </li>
<li>Then write 'firstName=' with your first name next to it</li>
<li>Then write '&' followed by 'lastName' with your last name next to it</li>
<li>Hit ENTER and see your customized message in the greeting below</li>
</ol>
</fieldset>
</body>
</html>