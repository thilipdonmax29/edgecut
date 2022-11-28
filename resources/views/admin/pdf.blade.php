<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="padding: 3rem">
    <h1>Order Details</h1>
    <p><b>Name:</b> {{ $order->name }}</p>
    <p><b>Customer Email:</b> {{ $order->email }}</p>
    <p><b>Customer Phone:</b> {{ $order->phone }}</p>
    <p><b>Customer Address:</b> {{ $order->address }}</p>
    <p><b>Customer Id:</b> {{ $order->user_id }}</p>
    <p><b>Product Name:</b> {{ $order->product_title }}</p>
    <p><b>Product Price:</b> {{ $order->price }}</p>
    <p><b>Product Quanity:</b> {{ $order->quantity }}</p>
    <p><b>Payment Status :</b> {{ $order->payment_status }}</p>
    <p><b>Product Id:</b> {{ $order->product_id }}</p>

</body>
</html>
