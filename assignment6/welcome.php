<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome</title>
</head>
<body>
  
<h1>If you want a custom greeting message, please do the following: </h1>
<fieldset>
<ol>
<li>In your address bar, append a '?' symbol </li>
<li>Then write 'firstName=' with your first name next to it</li>
<li>Then write '&' followed by 'lastName' with your last name next to it</li>
<li>Hit ENTER and see your customized message in the greeting below</li>
</ol>
</fieldset>

<?php 
if (isset($_GET['firstName'])){
  echo  "Greeting: Howdy " .  $_GET['firstName'] ;
} else if (isset($_GET['lastName'])){
echo "Greeting: Howdy " .  $_GET['lastName'] ;
} else if (isset($_GET['lastName']) || isset($_GET['lastName'])){
    echo "Greeting: No Name" ;
    } 
?>
</p>
</body>
</html>