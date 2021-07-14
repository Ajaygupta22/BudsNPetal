<html>
    <head>
        <link rel="stylesheet" href="6design.css">
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Calistoga' rel='stylesheet'>
        <link href="https://fonts.google.com/specimen/Open+Sans" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    </head>
    <body>
    <?php require_once("../../index.php")?>
        <h1><a href="../../home/home.php">Buds N Petals</a></h1>
        <div class="container" style="visibility: hidden;">
          <input class="search" type="text" placeholder="Search flowers, cakes, gifts etc."><br>
          <button class="find"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          </svg>Search</button>
        </div>
        <br>
    
        <div class="navbar" style="font-family:Ubuntu;">
            <ul>
              <li><a href="../../need today/needtoday.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-clock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm8-7A8 8 0 1 1 0 8a8 8 0 0 1 16 0z"/>
                <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
              </svg><br>Need Today?</a></li>

                <li><a href="../../aboutus.html"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-book" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg><br>About</a></li>
                
                <li><a href="../../cart.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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

                  ?>  </a>
                </li>
               
                  <li><a href="../../dhiraj/account/account.php"><svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-power" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 1 0 4.922.044l.5-.866a6 6 0 1 1-5.908-.053l.486.875z"/>
                    <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z"/>
                  </svg><br>Account</a></li>
            </ul>    
        </div>

        <div class="margin">
            <img id="0" src="chocolate-caramel-fudge-cake-half-kg_1.webp" class="image"><br>
            <ul class="thumbnail">
                <li><img id="1" class="thumb_normal" src="chocolate-caramel-fudge-cake-half-kg_1.webp" onmouseover="preview(this)"/> &nbsp;&nbsp;</li>
                <li><img id="2" class="thumb_normal" src="chocolate-caramel-fudge-cake-half-kg_3.webp" onmouseover="preview(this)"/> &nbsp;&nbsp;</li>
                <li><img id="3" class="thumb_normal" src="chocolate-caramel-fudge-cake-half-kg_4.webp" onmouseover="preview(this)"/> </li>
            </ul>
        </div>
        
        <div class="info">
          <div class="item_name">Chocolate Caramel Cake</div><br><br><br>
          <div class="review">4.8 
          <svg width="10px" height="10px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          <svg width="10px" height="10px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          <svg width="10px" height="10px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          <svg width="10px" height="10px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg>
          <svg width="10px" height="10px" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
          </svg> &nbsp;&nbsp;
          99 Reviews</div><br>
          <div class="price">₹<div class="number">799</div></div>
          <div class="discount"><del>₹999</del></div>
          <div class="percent">20% discount</div>
          <br>
          <div class="tax">Inclusive of all taxes</div><br>

          <form action="../../index.php" method="post">
          <button class="addToCart" name="add"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
          </svg>ADD TO CART</button>

          <input type="hidden" name="id" value="18">

          <div style="width:200px; text-align:center;height:40px; font-family:Ubuntu; border-radius:5px; padding-top:10px; font-size:20px; box-shadow:  4px 3px 5px grey; margin-left:230px; margin-top:-50px; background-color:orange;">
          <a href="../../dhiraj/payment/pay.php" style="text-decoration:none; color:white;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lightning-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z"/>
          </svg>BUY NOW</a></div> 
          <br><br>
          </form>

          <form action="../../cart.php" method="post">
          <input type="hidden" name="id" value="18">
          </form>

          <div class="des">Description:</div><br><br>
          
          <fieldset>
            <legend>Product Details </legend>
            <div class="inside_legend">
              <ul>
                <li>Cake Flavour- Chocolate</li>
                <li>Weight- 1 Kg</li>
                <li>Serves- 10-12 People</li>
              </ul>
            </div>
          </fieldset>
          <br><br>

          <fieldset>
            <legend>Note</legend>
            <div class="inside_legend">
              <ul>
                <li>The cake stand, cutlery & accessories used in the image are only for representation purposes. They are not delivered with the cake.</li>
                <li>This cake is hand delivered in a good quality cardboard box.</li>
              </ul>
            </div>
          </fieldset>
        </div>
                
        <script>
            var lastImg = 1;
            document.getElementById(lastImg).className = "selected";

            function preview(img){
                document.getElementById(lastImg).className = "thumb_normal";
                document.getElementById(0).src = img.src;
                img.className = "selected";
                lastImg = img.id;
            }
        </script>
    </body>
</html>


