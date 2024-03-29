<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Reference of where the icons come from -->
      <!-- Example of where the icon from different countries were used https://codepen.io/Fowerld/full/JjbMvew  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }
    </style>
    <title>Home</title>

</head>

<body>


    <?php 
    
// Use echo to print to the screen the html and table start tags
echo "<table>\n\n";
// Open csv file
$file = fopen("input.csv","r");
// Add appropriate code to open a file in PHP

// Fetching data from csv file row by row
while (($data = fgetcsv($file)) !== false) {
// Use echo to print to the screen the appropriate <tr> and <td> elements based on the CSV
echo"<tr> 
<td>$data[0]</td> 
<td>$data[1]</td>
<td>$data[6]</td>
</tr>";
}
// Close the file

// Use echo to print to the screen the html and table end tags
echo "\n</table>";
    
    ?>

    <!-- Menu Bar -->
    <div class="menu">
        <!-- Homebutton -->
        <a href="index.html" class="homebuttom">Home <i class="fa-solid fa-house"></i></a>
        <img src="mw.svg" alt="">
        <!-- Produce Dropdown Menu -->
        <div class="dropdown">
            <a href="" class="Products">Products <i class="fa-solid fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a href="currency.php">Currency exchange </a>
                <br>
                <a class="service2">Service 2</a>
            </div>
        </div>

        <!-- Produce Dropdown Menu -->
        <div class="dropdown">
            <a href="contact.html" class="Contact">Contact Us <i class="fa-solid fa-caret-down"></i></a>
            <div class="dropdown-content">
                <a class="frenchtranslation">Contactez-nous <i class="flag-icon flag-icon-fr flag-icon-squared"></i> </a>
                <br>
                <a class="service2">Contattaci <i class="flag-icon flag-icon-it flag-icon-squared"></i></a>
            </div>
        </div>
    
        <a href="aboutme.html">About</a>
</div>

<p id="messageHour"></p>
<br>
<br>
<p>Welcome to my website! On this page, you will see sports cards and supplies for all 4 major sports.
    Hockey Cards, Basketball Cards, Baseball Cards, and Football Cards. Hope you enjoy your stay.
</p>

        
        <script>
            //Date Object 

             var date = new Date();
             var hours = date.getHours();

    

             
            if (hours < 6){
           document.getElementById("messageHour").innerHTML = 'Good morning, you must be an early bird!';
         
            } else if (hours > 6 && hours < 12){
           document.getElementById("messageHour").innerHTML = 'Good morning';

            } else if (hours > 12 && hours < 18){
                document.getElementById("messageHour").innerHTML = 'Good afternoon';
            
            } else {
                document.getElementById("messageHour").innerHTML = 'Good evening';
            }

            
        </script>



        <h2>Rich's item</h2>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for items.." title="Type in a name">
        <ul id="myUL">
            <li><a href="#">1 hit Pack Basketball</a></li>
            <li><a href="#">1 hit Pack Hockey</a></li>
            <li><a href="#">1 hit Pack Baseball</a></li>
            <li><a href="#">1 hit Pack Football</a></li>
            <li><a href="#">12 Card Pack Hockey</a></li>
            <li><a href="#">12 Card Pack Basketball</a></li>
            <li><a href="#">Allure 23-24</a></li>
            <li><a href="#">Allure 22-23</a></li>
            <li><a href="#">CHL Box 23-24</a></li>
            <li><a href="#">CHL Box 22-23</a></li>
            <li><a href="#">College Basketball Blaster Box</a></li>
            <li><a href="#">Upper Deck 23-24</a></li>
            <li><a href="#">Upper Deck 22-23</a></li>
            <li><a href="#">O Pee Chee 23-24</a></li>
            <li><a href="#">O Pee Chee 22-23</a></li>
            <li><a href="#">O Pee Chee Platinum 23-24</a></li>
            <li><a href="#">O Pee Chee Platinum 22-23</a></li>
            <li><a href="#">Panini Prism 23-24</a></li>
            <li><a href="#">Panini Prism 22-23</a></li>
            <li><a href="#">NBA Donruss 23-24</a></li>
            <li><a href="#">NBA Donruss 22-23</a></li>
            <li><a href="#">SP Authentic 23-24</a></li>
            <li><a href="#">SP Authentic 22-23</a></li>
            <li><a href="#">Dollarama Mystery Pokemon Pack</a></li>
            <li><a href="#">Dollarama Mystery Hockey Pack</a></li>
            <li><a href="#">Topps Baseball 23-24</a></li>
            <li><a href="#">Topps Baseball 22-23</a></li>
            <li><a href="#">Topps Chrome 23-24</a></li>
            <li><a href="#">Topps Chrome 22-23</a></li>
            <li><a href="#">Card Sleeves</a></li>
            <li><a href="#">Card Binder</a></li>
            <li><a href="#">Card Protector</a></li>
            <li><a href="#">Jumbo Card Sleeves</a></li>
            <li><a href="#">Jumbo Card Protector</a></li>
            <li><a href="#">Numbered 1/20 Lebron Base Silver Prizm 22-23</a></li>
            <li><a href="#">Numbered 1/10 Lebron Base Gold Prizm 22-23</a></li>
            <li><a href="#">1 of 1 Lebron Base Diamond Prizm 22-23</a></li>
            <li><a href="#">Young Guns Base 22-23 Jake Sanderson</a></li>
            <li><a href="#">Young Guns Base 22-23 Wyatt Johnston</a></li>
            <li><a href="#">Young Guns Base 21-22 Moritz Seider</a></li>
            <li><a href="#">Young Guns Base 23-24 Connor Bedard</a></li>
            <li><a href="#">Donruss Rookie Base 22-23 Jalen Ivey</a></li>
            <li><a href="#">SP Future Watch 20-21 Auto 13/999 Alexis Lafreniere</a></li>
            <li><a href="#">SP Future Watch 05-06 Auto 322/999 Alexander Ovechkin</a></li>
            <li><a href="#">Prizm Parallel 23-24 Base 15/99 Luka Doncic</a></li>
            <li><a href="#">The Cup Ultimate 22-23</a></li>
            <li><a href="#">King of The Court Box 21-22</a></li>
            <li><a href="#">Artifacts Blaster 22-23</a></li>
            <li><a href="#">Artifacts Blaster 19-20</a></li>
            <li><a href="#">Walmart Mega Mystery Box Hockey Edition</a></li>
            <li><a href="#">Walmart Mini Mystery Box Hockey Edition</a></li>
            <li><a href="#">1 Mystery Graded Card Hockey Edition</a></li>
        </ul>

        <!-- Javascript section -->
        <script>
            // By default when you go on the page, you won't see any
            document.getElementById("myUL").style.display = "none";    

            function myFunction() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        document.getElementById("myUL").style.display = "block";   
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                        
                    }
                }
                10
                

                // An if statement for when you type and clear the whole input
                if (txtValue.toUpperCase().indexOf(filter) == 0){
                    document.getElementById("myUL").style.display = "none";   
                }

            }

     
        </script>
    
</body>

</html>