<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="plantdesign.css">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php require_once("../index.php")?>
        <h1><a href="../home/home.php">Buds N Petals</a></h1>
        <div class="container" style="visibility:hidden">
          <input class="search" type="text" placeholder="Search flowers, cakes, gifts etc."><br>
          <button class="find"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          </svg>Search</button>
        </div>
        <br>
        <div class="navbar" style="font-family:Ubuntu;">
            <ul>
              <li><a href="../need today/needtoday.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
              </svg><br>Need Today?</a></li>

                <li><a href="../aboutus.html"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg><br>About</a></li>
                
                <li><a href="../cart.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg><br>Cart
                  <?php
                    if(isset($_SESSION['cart']))
                    {
                      $count = count($_SESSION['cart']);
                      echo "<span id=\"cart_count\" >$count</span>";
                    }
                    else
                    {
                      echo "<span id=\"cart_count\" >0</span>";
                    }

                  ?>
                  </a></li>
               
                  <li><a href="../dhiraj/account/account.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                    <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                  </svg><br>Account</a></li>
            </ul>    
        </div>
        
        
        <div class="items">
            <ul>
              <a href="../all plant/1/1.php"><li class="circle"><img src="money-plant-in-purple-ceramic-pot_1.webp"><div class="info1">Money Plant<br>
              ₹399 &nbsp;&nbsp;<del>₹499</del>&nbsp;&nbsp;<b>20% OFF</b></div></li></a>
              <a href="../all plant/2/2.php"><li class="circle"><img src="potted-coleus-plant_1.webp"><div class="info1">Potted Coleus Plant<br>
                ₹540 &nbsp;&nbsp;<del>₹600</del>&nbsp;&nbsp;<b>10% OFF</b></div></li></a>
              <a href="../all plant/3/3.php"><li class="circle"><img src="milt-sansevieria-in-a-white-ceramic-pot_1.webp"><div class="info1">MILT Sansevieria Plant<br>
                ₹900 &nbsp;&nbsp;<del>₹1000</del>&nbsp;&nbsp;<b>10% OFF</b></div></li></a>
              <a href="../all plant/4/4.php"><li class="circle"><img src="green-pot-of-sansevieria-plant_1.webp"><div class="info1">Sansevieria Plant<br>
                ₹680 &nbsp;&nbsp;<del>₹800</del>&nbsp;&nbsp;<b>15% OFF</b></div></li></a>
            </ul>

            <ul>
                <a href="../all plant/5/5.php"><li class="circle"><img src="flowering-guldaudi-plant_1.webp"><div class="info1">Flowering Guldaudi Plant<br>
                  ₹569 &nbsp;&nbsp;<del>₹600</del>&nbsp;&nbsp;<b>5% OFF</b></div></li></a>
                <a href="../all plant/6/6.php"><li class="circle"><img src="chlorophytum-plant-ganesha-idol-combo_1.webp"><div class="info1">Chlorophytum Plant<br>
                  ₹959 &nbsp;&nbsp;<del>₹1200</del>&nbsp;&nbsp;<b>20% OFF</b></div></li></a>
                <a href="../all plant/7/7.php"><li class="circle"><img src="hoya-plant-in-sheesham-wood-planter_1.webp"><div class="info1">Hoya Plant<br>
                  ₹1200 &nbsp;&nbsp;<del>₹1500</del>&nbsp;&nbsp;<b>20% OFF</b></div></li></a>
                <a href="../all plant/8/8.php"><li class="circle"><img src="green-ficus-dwarf-beauty-plant_1.webp"><div class="info1">Ficus Dwarf Plant<br>
                  ₹809 &nbsp;&nbsp;<del>₹899</del>&nbsp;&nbsp;<b>10% OFF</b></div></li></a>
            </ul>

            <ul>
                <a href="../all plant/9/9.php"><li class="circle"><img src="pot-of-mini-aloe-vera-plant_1.webp"><div class="info1">Mini Aloe Vera Plant<br>
                  ₹719 &nbsp;&nbsp;<del>₹799</del>&nbsp;&nbsp;<b>10% OFF</b></div></li></a>
                <a href="../all plant/10/10.php"><li class="circle"><img src="jade-plant-terrarium-in-glass-vase_1.webp"><div class="info1">Jade Plant<br>
                  ₹720 &nbsp;&nbsp;<del>₹800</del>&nbsp;&nbsp;<b>10% OFF</b></div></li></a>
                <a href="../all plant/11/11.php"><li class="circle"><img src="gorgeous-salvia-plant_1.webp"><div class="info1">Gorgeous Salvia Plant<br>
                  ₹540 &nbsp;&nbsp;<del>₹600</del>&nbsp;&nbsp;<b>10% OFF</b></div></li></a>
                <a href="../all plant/12/12.php"><li class="circle"><img src="flowering-marigold-plant_1.webp"><div class="info1">Flowering Marigold Plant<br>
                  ₹850 &nbsp;&nbsp;<del>₹1000</del>&nbsp;&nbsp;<b>15% OFF</b></div></li></a>
              </ul>
          </div>    
    </body>
</html>