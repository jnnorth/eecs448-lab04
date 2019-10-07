<?php

$username = $_POST["user"];
$password = $_POST["pass"];
$shipping = $_POST["shipping"];
$xbox = $_POST["xboxonex"];
$cont = $_POST["controller"];
$nswitch = $_POST["nswitch"];

echo "<h3 Nick's Game Store Receipt</h3>";
echo "<h3> User:" . $username . ".</h3><br>";
echo "<h3> Password:" . $password . ".</h3><br><br>";

$xbox_price = 400*$xbox;
echo "<p>Xbox Quantity: " . $xbox . ".</p><br>";
echo "<p>Xbox Price: " . $xbox_price . ".</p><br>";

$cont_price = 40*$cont;
echo "<p>PS4 Controller Quantity: " . $cont . ".</p><br>";
echo "<p>PS4 Controller Price: " . $cont_price . ".</p><br>";

$switch_price = 300*$nswitch;
echo "<p>Nintendo Switch Quantity: " . $nswitch . ".</p><br>";
echo "<p>Nintendo Switch Price: " . $switch_price . ".</p><br><br>";

$shipping_price = 0;
if ($shipping = "free")
{
  $shipping_price = 0;
}

if ($shipping = "overnight")
{
  $shipping_price = 50;
}

if ($shipping = "three_day")
{
  $shipping_price = 8;
}

echo "<p>Shipping Method: " . $shipping . "</p><br>";
echo "<p>Shipping Price: " . $shipping_price . "</p><br><br>";

$total = $xbox_price + $cont_price + $switch_price + $shipping_price;

echo "<h3>Your total is " . $total . ".</h3><br>";
echo "<p>Thanks for shopping with us!</p><br>"

 ?>
