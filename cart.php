<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "miniproject";
$total = 0;
$real_price = 0;
$saving = 0;

$conn = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['remove']))
{
    if($_GET['action']=='remove')
    {
        foreach($_SESSION['cart'] as $key=>$value)
        {
            if($value['product_id'] == $_GET['id'])
            {
                unset($_SESSION['cart'][$key]);
                echo"<script>window.location='cart.php'</script>";
            }
        }
    }
}
?>


<html>
    <head><link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
</head>
    <body>
    <?php require_once("nav.php")?>
    <br>
    <div style='width:1520px; height:80px; background-color:orange;'>
        
        <h1 style="font-family:Calistoga; margin-left:80px; font-size:50px; color:white; ">My Cart &nbsp;<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg></h1></div>
        <div style='margin-bottom:-90px;'></div>
        <div style='margin-left:80px;'>    
        <?php
            if (isset($_SESSION['cart'])){
                $product_id = array_column($_SESSION['cart'], 'product_id');
                $sql = 'select * from product';
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row = mysqli_fetch_assoc($result)){
                        foreach ($product_id as $id){
                            if ($row['product_id'] == $id){
                                cartElement($row['product_id'],$row['img'], $row['product_name'],$row['price'], $row['original_price']);       
                                $total = $total + (int)$row['price']; 
                                $real_price = $real_price + (int)$row['original_price'];   
                                $saving = $saving + ((int)$row['original_price'] - (int)$row['price']);                      
                            }
                        }
                    }
                }
                
            }
            else
            {
                echo "<h5>Cart is Empty</h5>";
            }
        ?>
    </div>   
    <br><br><br><br><br><br><br> 
    <div style='float:left; height:310px; width:450px; border-style:ridge; margin-left:10px; background-color: Gainsboro;'>
    <div style='font-size: 20px; font-family: Ubuntu; margin-left:5px; margin-top:5px'><b style='font-size:25px;'>PRICE DETAILS</b>
    <hr style='width:430px; margin-left: 5px; margin-top: -1px; background-color: black;'>
    Price <b style="margin-left: 314px;"><?php echo"₹$real_price" ?></b><br>
    Discount <b style="margin-left: 278px;"><?php echo"₹$saving" ?></b><br>
    Delivery Charge<b style="margin-left: 214px;"> <del>₹50</del></b><br><br>
    <br><br><hr style="width:430px; margin-left:5px;">
    <?php
    echo "<b style='font-size:25px;'>Total:<b style='margin-left:290px;'> ₹$total<br>";
    ?>
    <div style="margin-top:20px; margin-left:70px; height:40px; text-align:center; width:290px; background-color:orange;border-radius:5px; padding-top:5px;"><a href="dhiraj/payment/pay.php" style="text-decoration:none; color:white;">Proceed To Payment</a></div>
    
    <!-- <a href="home/home.php"><button type='submit' style='margin-top:15px; font-family:Ubuntu; font-size:20px; border-radius:5px; 
    cursor:pointer; margin-left:80px; background-color:orange; outline:none; height:40px; width:250px;'>Proceed to Payment</button></a> -->
    </div>
    <br>
    <br>

</body>
</html>
    

<?php
function cartElement($product_id,$productimg, $productname, $productprice, $ini_price){
    $element = "
    <form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
                    <div style='float:left; width:900px; height:150px; border-style:solid; border-color:green; box-shadow:3px 3px 4px green; margin-top:125px;'>
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <img src=$productimg alt=\"Image1\" style='width:130px; height:150px;'>
                            <div class=\"col-md-6\" style='margin-left:160px; margin-top:-170px;'>
                                <h1 class=\"pt-2\" style='font-family:Ubuntu; font-size:42px; margin-top:20px;'>$productname</h1>
                                <h2 class=\"pt-2\" style='margin-top:0px; color:red; font-size:40px;'>₹$productprice</h2>
                                <div style='margin-top:-30px; color:gray;'>Inclusive of all taxes </div>
                                <div style='margin-top:-90px; color:green; font-size:25px;'><del>₹$ini_price</del></div>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\" style='margin-left:633px; cursor:pointer; color:white; margin-top: 10px; height:40px; width:90px;background-color:orange; 
                                border-radius:5px'>REMOVE</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div style='margin-left:790px; margin-top:-115px;'>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\" style='height:25px; width:25px;border-radius:36px; outline:none; cursor:pointer;' onclick='decrease()'>-</button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\" style='width:35px; height:30px; text-align:center; background-color:orange;
                                    border-radius:4px; color:white;' id='qty'>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\" style='height:25px; width:25px;border-radius:36px; outline:none; cursor:pointer;' onclick='increase()'>+</button>
                                </div>
                            </div>
                        </div>
                </form>
    
    ";
    echo  $element;

}
?>

<script>
var val = parseInt(document.getElementById('qty').value);
function increase()
{
    val = val + 1;
    document.getElementById('qty').value = val;
}

function decrease()
{
    if (val>1)
    {
        val = val - 1;
        document.getElementById('qty').value = val;
    }
}
</script>
