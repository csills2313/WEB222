<!DOCTYPE HTML>
<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],$_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k)
								$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Donation Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/additional-methods.js"></script>
<script src="../js/validate_cart.js"></script>
</HEAD>
<BODY>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["name"]; ?></strong></td>
				<td><?php echo $item["code"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td align="right"> <?php echo "$".$item["price"]; ?></td>
				<td><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align="right"><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div>
<form action="../donate_cofirm.php" id="contact_form" name="contact_form" method="post" class="btnAddAction">
<table width="269" border="1">
  <tr>
    <th width="104" scope="row">Name</th>
    <td width="149"><label for="name"></label>
      <input type="text" name="name" id="name" value="<?php if (isset($_POST['name'])){ echo $_POST['name'];}?>"></td>
    </tr>
  <tr>
    <th scope="row">Email Address</th>
    <td><label for="email"></label>
      <input type="text" name="email" id="email" value="<?php if (isset($_POST['email'])){ echo $_POST['email'];}?>"></td>
    </tr>
  <tr>
    <th scope="row">Address</th>
    <td><label for="address"></label>
      <input type="text" name="address" id="address" value="<?php if (isset($_POST['address'])){ echo $_POST['address'];}?>"></td>
    </tr>
  <tr>
    <th scope="row">State</th>
    <td id="state" name="state"><label for="state"></label>
      <input type="text" name="state" id="state" value="<?php if (isset($_POST['state'])){ echo $_POST['state'];}?>"></td>
    </tr>
    <tr>
    <th scope="row">Zip Code</th>
    <td><label for="zipcode"></label>
      <input type="text" name="zipcode" id="zipcode" value="<?php if (isset($_POST['zipcode'])){ echo $_POST['zipcode'];}?>"></td>
    </tr>
</table>
<input name="donatenow" type="submit" id="donatenow" value="Donate Now!">

</form>
<div id="product-grid">
  <div class="txt-heading">Products</div>
	<?php
	$path = "/images/";
	$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>" width="100" height="100"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
			}
	}
	?>
</div>
</BODY>
</HTML>