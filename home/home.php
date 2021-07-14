<html>
    <head>
        <link rel="stylesheet" href="homestyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
        <title>BudsNPetal</title>
    </head>
    <body>
    <?php require_once("../index.php")?>
        <div style="font-family: Ubuntu;"><h1><a href="home.php">Buds N Petals</a></h1></div>
        <div class="container" style="visibility: hidden;">
          <input class="search" type="text" placeholder="Search flowers, cakes, gifts etc."><br>
          <button class="find"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          </svg>Search</button>
        </div>
        <br>
        <div style="margin-top:35px;"></div>
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

                  ?></a>
                  </li>
               
                  <li><a href="../dhiraj/account/account.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                    <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                  </svg><br>Account</a></li>
            </ul>    
        </div>
      <div id="container">        
      </div>
    
      <div class="circle_div" style="margin-top:8px; font-family:Ubuntu; padding-top:30px; font-color:black;">
        <ul>
          <li><a href="../flower home/flower.php" ><img class="circle" src="flower_icon.jpg"></a><br>Flowers</li>
          <li><a href="../cake/cake_home.php"><img class="circle" src="cake_icon.jpg"></a><br>Cakes</li>
          <li><a href="../plants/plant_home.php"><img class="circle" src="plant_icon.jpg"></a><br>Plants</li>
        </ul>
      </div>

      <!-- FOOTER  
      
      <footer>
      <div class="main-content">
        <div class="left box">
          <h2>Some Products</h2>
          <div class="content">
           <ul>
               <li>Caramel Apple Cake..</li>
               <li>Pineapple and Rum Cake..</li>
               <li>Lemon Ginger Cake..</li>
               <li>Calla Lilies..</li>
               <li>Lilies..</li>
               <li>Roses..</li>
               
           </ul>
           <h2 style="margin-top: 10px;">Follow Us on</h2>
            <div class="social">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-google-play"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Bandra West,Mumbai-400059</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+91-8080631610</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">bnp2020@gmail.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="25" required></textarea>
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div> 
       End of Main Content 
      <div class="bottom" style="text-align: center;">
          <span class="credit">Created By ABD | </span>
          <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
      </div>
    </footer>
    <br>-->
      
    </body>
</html>