<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <div class="transaction">
     <div class="transactions">
        <H1>ITEM TRANSACTION</H1>

     <form >
    <Label><strong>Item Name</strong></Label><br>
    <input type="Item" name = "item" class ="name"><br>
    <Label><strong>Price</storng></Label><br>
    <input type="Price" name = "price"  class="money"><br>
    <Label><strong>Quantity</strong></Label><br>
    <input type="Quantity" name = "quantity" class = "quan"><br>
    <button type="submit">Sumbit</button>

    </form>    
        </div>
            </div> 
<style>
h1{
    margin-left:40px;
    color: #333;
}
label{
    margin-left:65px;
}
.name{
    margin-left: 65px;
}
.money{
    margin-left: 65px;
}
.quan{
    margin-left: 65px;
}
.transaction{

    background: #fff;
    border-radius: 8px;
    padding: 40px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
body {
    font-family: Arial, sans-serif;
    background: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}
label{
    color: #555;
}
input[type="Item"],
input[type="Price"],
input[type="Quantity"] {
    width: 60%;
    padding: 9px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}
button[type="submit"] {
    width: 50%;
    margin-top: 20px;
    padding: 10px;
    background: #4f46e5;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 15px;
    cursor: pointer;
    margin-left: 95px;
}
form{

}
  




</style>


</body>
</html>