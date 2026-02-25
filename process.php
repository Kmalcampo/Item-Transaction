<?php
function computeSubtotal($price, $qty)    { return $price * $qty; }
function computeDiscount($subtotal)       { return $subtotal >= 500 ? $subtotal * 0.10 : $subtotal * 0.05; }
function computeTax($subtotal, $discount) { return ($subtotal - $discount) * 0.12; }
function computeFinal($subtotal, $discount, $tax) { return ($subtotal - $discount) + $tax; }
function formatCurrency($amount)          { return '&#8369; ' . number_format($amount, 2); }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: index.php'); exit; }

$item     = $_POST['item'];
$price    = (float)$_POST['price'];
$quantity = (int)$_POST['quantity'];


$subtotal = computeSubtotal($price, $quantity);
$discount = computeDiscount($subtotal);
$tax      = computeTax($subtotal, $discount);
$final    = computeFinal($subtotal, $discount, $tax);
$discRate = $subtotal >= 500 ? '10%' : '5%';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Summary</title>
</head>
<body>

<div class="transaction">
    <div class="transactions">
        <h1>TRANSACTION SUMMARY</h1>

        <table>
            <tr><th>Item Name</th>    <td><?= ($item) ?></td></tr>
            <tr><th>Price</th>        <td><?= ($price) ?></td></tr>
            <tr><th>Quantity</th>     <td><?= $quantity ?></td></tr>
            <tr><th>Subtotal</th>     <td><?= ($subtotal) ?></td></tr>
            <tr><th>Discount (<?= $discRate ?>)</th><td>- <?=($discount) ?></td></tr>
            <tr><th>Tax (12%)</th>      <td>+ <?= ($tax) ?></td></tr>
            <tr class="total"><th>TOTAL TO PAY</th><td><?=($final) ?></td></tr>
        </table>

        <a href="index.php"><button>Go Back</button></a>
    </div>
</div>

</body>
</html>