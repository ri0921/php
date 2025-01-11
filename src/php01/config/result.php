<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$kinds = htmlspecialchars($_POST['kinds'], ENT_QUOTES);
$quantity = htmlspecialchars($_POST['quantity'], ENT_QUOTES);

echo "私の名前は、". $name. "<br />";
echo "ご希望の商品は、". $kinds. "<br />";
echo "注文数は、". $quantity;
