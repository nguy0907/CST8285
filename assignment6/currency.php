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
  <form action="currency.php" method="post">


    <fieldset>
      <label for="convertedFrom">Amount</label>
      <input type="text" id="currencyInput" name="currencyInput">
      <?php $_POST ?>
      <br>
      <label>Convert From: </label>
      <input type="radio" name="convertedFrom" value="CAN">CAN <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
      <input type="radio" name="convertedFrom" value="USD">USD <i class="flag-icon flag-icon-us flag-icon-squared"></i>
      <input type="radio" name="convertedFrom" value="UER">UER <i class="fa-solid fa-euro-sign"></i>
      <input type="radio" name="convertedFrom" value="GBP">GBP <i class="fa-solid fa-sterling-sign"></i>
      <input type="radio" name="convertedFrom" value="CHY">CHY <i class="flag-icon flag-icon-cn flag-icon-squared"></i>
    </fieldset>


    <fieldset>
      <label>Convert To: </label>
      <input type="radio" name="convertedTo" value="CAN">CAN <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
      <input type="radio" name="convertedTo" value="USD">USD <i class="flag-icon flag-icon-us flag-icon-squared"></i>
      <input type="radio" name="convertedTo" value="UER">UER <i class="fa-solid fa-euro-sign"></i>
      <input type="radio" name="convertedTo" value="GBP">GBP <i class="fa-solid fa-sterling-sign"></i>
      <input type="radio" name="convertedTo" value="CHY">CHY <i class="flag-icon flag-icon-cn flag-icon-squared"></i>
    </fieldset>


    <input type="submit" id="conversionConfirmed">
    <p>
      <?php 

if (isset($_POST['currencyInput'])) {

  echo $_POST['currencyInput'];
  echo $_POST['convertedFrom'];
  echo "=";
  echo $_POST['convertedTo'];
}
?>

    </p>
  </form>
</body>

</html>