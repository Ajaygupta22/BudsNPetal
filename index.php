<?php  

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "miniproject";

$conn = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add']))
{
	if(isset($_SESSION['cart']))
	{
		$item_array_id = array_column($_SESSION['cart'], 'product_id');

		if(in_array($_POST['id'],$item_array_id))
		{	
			echo "<script>alert('Product already in the cart!!')</script>";
			echo"<script>window.location='cart.php'</script>";
		}
		else
		{
			$count = count($_SESSION['cart']);
			$item_array = array('product_id' => $_POST['id']);
			$_SESSION['cart'][$count] = $item_array;
			echo "<script>alert('Product added to the cart!!')</script>";
			echo"<script>window.location='cart.php'</script>";
		}
		
	}
	else
	{
		$item_array = array('product_id' => $_POST['id']);
		$_SESSION['cart'][0] = $item_array; 
		print_r($_SESSION['cart']); 
	}
}
?>

