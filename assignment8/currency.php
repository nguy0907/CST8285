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
  <form action="phptest.php" method="post">


    <fieldset>
      <label>Amount</label>
      <input type="text" id="currencyInput" name="currencyInput">
      <?php $_POST ?>
      <br>
      <label>Convert From: </label>
      
      <input type="radio" name="convertedFrom" value="CAN"> <i name="convertedFromFlag"   class="flag-icon flag-icon-ca flag-icon-squared"></i> CAN
      <input type="radio" name="convertedFrom" value="USD"> <i name="convertedFromFlag"  class="flag-icon flag-icon-us flag-icon-squared"></i> USD
      <input type="radio" name="convertedFrom" value="EUR"> <i name="convertedFromFlag"  class="flag-icon flag-icon-fr flag-icon-squared"></i> EUR
      <input type="radio" name="convertedFrom" value="GBP"> <i name="convertedFromFlag"  class="flag-icon flag-icon-gb flag-icon-squared"></i> GBP
      <input type="radio" name="convertedFrom" value="CHY"> <i name="convertedFromFlag"  class="flag-icon flag-icon-cn flag-icon-squared"></i >CHY
    </fieldset>


    <fieldset>
      <label>Convert To: </label>
      <input type="radio" name="convertedTo" value="CAN"> <i class="flag-icon flag-icon-ca flag-icon-squared"></i> CAN
      <input type="radio" name="convertedTo" value="USD"> <i class="flag-icon flag-icon-us flag-icon-squared"></i> USD
      <input type="radio" name="convertedTo" value="EUR"> <i class="flag-icon flag-icon-fr flag-icon-squared"></i> EUR
      <input type="radio" name="convertedTo" value="GBP"> <i class="flag-icon flag-icon-gb flag-icon-squared"></i> GBP
      <input type="radio" name="convertedTo" value="CHY"> <i class="flag-icon flag-icon-cn flag-icon-squared"></i> CHY
    </fieldset>

 

    <input type="submit" id="conversionConfirmed" value="convert">
    <p>

      <?php 
      $inputNumber = $_POST['currencyInput'];
       $CAN = 'CAN'; 
       $USD = 'USD'; 
       $EUR = 'EUR'; 
       $GBP = 'GBP'; 
       $CHY = 'CHY'; 
 
       if (isset($_POST['currencyInput']) ) {

        // An if statement if you click on a certain currency you want to convert
        if ($_POST['convertedFrom']== "CAN") {
          echo '<i class="flag-icon flag-icon-ca flag-icon-squared"></i>';
          echo $_POST['convertedFrom'];
          echo $inputNumber * 1;
         
        echo "=";
      
      
      
        } else if ($_POST['convertedFrom']== "USD"){
          echo '<i class="flag-icon flag-icon-us flag-icon-squared"></i>';
          echo $_POST['convertedFrom'];
        // Converting from  USD to CAN
        echo $inputNumber / 0.74;
        echo "=";
      
      
        } else if ($_POST['convertedFrom']== "EUR"){
          echo '<i class="flag-icon flag-icon-fr flag-icon-squared"></i>';
          echo $_POST['convertedFrom'];
          echo $inputNumber * 0.68;
        echo "=";
       
        
        } elseif ($_POST['convertedFrom']== "GBP"){
          echo '<i class="flag-icon flag-icon-gb flag-icon-squared"></i>';
         echo $_POST['convertedFrom'];
          echo $_POST['currencyInput']; 
        echo "=";
      
        } elseif ($_POST['convertedFrom']== "CHY"){
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
        
          } elseif ($_POST['convertedTo']== "USD"){
            echo '<i class="flag-icon flag-icon-us flag-icon-squared"></i>';
            echo $_POST['convertedTo']; 
      
            //Converting CAN to USD
              echo 0.74* $_POST['currencyInput'];
            
      
          } elseif ($_POST['convertedTo']== "EUR"){
            echo '<i class="flag-icon flag-icon-fr flag-icon-squared"></i>';
            echo $_POST['convertedTo'];
      
               //Converting CAN to EUR
        
          echo $inputNumber * 0.68;
      
          } elseif ($_POST['convertedTo']== "GBP"){
            echo '<i class="flag-icon flag-icon-gb flag-icon-squared"></i>';
            echo $_POST['convertedTo'];
            echo $_POST['currencyInput']; 
      
            echo 0.79 * $inputNumber;
      
      
          } elseif ($_POST['convertedTo']== "CHY"){
            echo '<i class="flag-icon flag-icon-cn flag-icon-squared"></i>';
            echo $_POST['convertedTo'];
            echo $_POST['currencyInput']; 
            echo 7.20 * $inputNumber;
        
          } else {
            echo 'Must select a value you want to convert to';
          }
      
         
      }   
 
?>
    </p>
  
  </form>
</body>

</html>