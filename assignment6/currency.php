<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Reference of where the icons come from -->
  <!-- Example of where the icon from different countries were used https://codepen.io/Fowerld/full/JjbMvew  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

  <title>Currency Converter</title>
</head>

<body>
  <h1>Welcome to the Currency Converter </h1>
  <form action="currency.php" method="post">


    <fieldset>
      <label>Amount</label>
      <input type="text" id="currencyInput" name="currencyInput">
      <?php $_POST ?>
      <br>
      <label>Convert From: </label>
      <input type="radio" name="convertedFrom" value="CAN">CAN <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
      <input type="radio" name="convertedFrom" value="USD">USD <i class="flag-icon flag-icon-us flag-icon-squared"></i>
      <input type="radio" name="convertedFrom" value="EUR">EUR <i class="flag-icon flag-icon-fr flag-icon-squared"></i>
      <input type="radio" name="convertedFrom" value="GBP">GBP <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
      <input type="radio" name="convertedFrom" value="CHY">CHY <i class="flag-icon flag-icon-cn flag-icon-squared"></i>
    </fieldset>


    <fieldset>
      <label>Convert To: </label>
      <input type="radio" name="convertedTo" value="CAN">CAN <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
      <input type="radio" name="convertedTo" value="USD">USD <i class="flag-icon flag-icon-us flag-icon-squared"></i>
      <input type="radio" name="convertedTo" value="EUR">EUR <i class="flag-icon flag-icon-fr flag-icon-squared"></i>
      <input type="radio" name="convertedTo" value="GBP">GBP <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
      <input type="radio" name="convertedTo" value="CHY">CHY <i class="flag-icon flag-icon-cn flag-icon-squared"></i>
    </fieldset>

 

    <input type="submit" id="conversionConfirmed" value="convert">
    <p>

      <?php 
 $CAN = $_POST['currencyInput']; 
 $USD = $_POST['currencyInput']; 
 $EUR = $_POST['currencyInput']; 
 $GBP = $_POST['currencyInput']; 
 $CHY = $_POST['currencyInput']; 


if (isset($_POST['currencyInput']) ) {

  // An if statement if you click on a certain currency you want to convert
  if ($_POST['convertedFrom']== "CAN") {
    echo '<i class="flag-icon flag-icon-ca flag-icon-squared"></i>';
   echo $_POST['convertedFrom'];
    echo $_POST['currencyInput']; 
  echo "=";



  } else if ($_POST['convertedFrom']== "USD"){
    echo '<i class="flag-icon flag-icon-us flag-icon-squared"></i>';
   echo $_POST['convertedFrom'];
    echo $_POST['currencyInput']; 
  echo "=";

  } else if ($_POST['convertedFrom']== "EUR"){
    echo '<i class="flag-icon flag-icon-fr flag-icon-squared"></i>';
   echo $_POST['convertedFrom'];
    echo $_POST['currencyInput']; 
  echo "=";
 
  } else if ($_POST['convertedFrom']== "GBP"){
    echo '<i class="flag-icon flag-icon-gb flag-icon-squared"></i>';
   echo $_POST['convertedFrom'];
    echo $_POST['currencyInput']; 
  echo "=";

  } else if ($_POST['convertedFrom']== "CHY"){
    echo '<i class="flag-icon flag-icon-cn flag-icon-squared"></i>';
   echo $_POST['convertedFrom'];
    echo $_POST['currencyInput']; 
  echo "=";
 
  }  else{
    echo 'Must select a value you want to convert ';
  }


    // An if statement if you click on a certain currency you want to convert into
    if ($_POST['convertedTo']== "CAN") {
      echo '<i class="flag-icon flag-icon-ca flag-icon-squared"></i>';
      echo $_POST['convertedTo'];
      echo $_POST['currencyInput']; 
  
    } else if ($_POST['convertedTo']== "USD"){
      echo '<i class="flag-icon flag-icon-us flag-icon-squared"></i>';
      echo $_POST['convertedTo']; 
        echo 0.74* $_POST['currencyInput'];
      
    

    } else if ($_POST['convertedTo']== "EUR"){
      echo '<i class="flag-icon flag-icon-fr flag-icon-squared"></i>';
      echo $_POST['convertedTo'];
      echo 0.92* $_POST['currencyInput'];
        
    

    } else if ($_POST['convertedTo']== "GBP"){
      echo '<i class="flag-icon flag-icon-gb flag-icon-squared"></i>';
      echo $_POST['convertedTo'];
      echo $_POST['currencyInput']; 
      echo 0.79* $_POST['currencyInput'];


    } else if ($_POST['convertedTo']== "CHY"){
      echo '<i class="flag-icon flag-icon-cn flag-icon-squared"></i>';
      echo $_POST['convertedTo'];
      echo $_POST['currencyInput']; 
      echo 7.20 * $_POST['currencyInput'];
    } else {
      echo 'Must select a value you want to convert to';
    }

   
} 
?>
    </p>
  
  </form>
</body>

</html>