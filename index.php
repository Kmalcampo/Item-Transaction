<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Transaction</title>
</head>
<body>

<div class="transaction">
    <div class="transactions">
        <h1>ITEM TRANSACTION</h1>
        <form action="process.php" method="POST">
            <label><strong>Item Name</strong></label><br>
            <input type="text" name="item" required><br>
            <label><strong>Price</strong></label><br>
            <input type="number" name="price" step="0.01" min="0" required><br>
            <label><strong>Quantity</strong></label><br>
            <input type="number" name="quantity" min="1" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

</body>
</html>