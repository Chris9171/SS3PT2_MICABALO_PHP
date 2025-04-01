<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, rgb(255, 25, 179), rgb(1, 186, 248), rgb(187, 11, 214), rgb(118, 192, 111));
            background-size: 400% 400%;
            animation: gradientBG 5s ease infinite;
            overflow: hidden;
            text-align: center;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-size: 18px;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: rgb(21, 129, 231);
        }
        form {
            display: inline-block;
            text-align: left;
        }
        input, select {
            padding: 15px;
            margin-top: 10px;
            display: block;
            font-size: 22px;
            width: 100%;
            border-radius: 5px;
            border: 2px solid #ccc;
        }
        button, input[type="submit"] {
            padding: 10px 20px;
            background-color: rgb(26, 252, 233);
            color: navy; 
            border: none;
            cursor: pointer;
            font-size: 20px;
        }
        button:hover, input[type="submit"]:hover {
            background-color: rgb(13, 232, 248);
        }
        .order-summary {
            font-size: 30px;
            color: rgba(0, 0, 0, 0.88);
            font-weight: bold;
            margin-top: 20px;
        }
        .order-summary p {
            margin: 50px 0;
        }
        label {
            font-size: 26px;
            color: rgb(5, 9, 12);
            font-weight: bold;
        }
        input[type="checkbox"] {
            transform: scale(3.5);
            margin-right: 50px;
        }
    </style>
</head>
<body>
    <h1>Item Order</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Unit Price</th>
        </tr>
        <tr>
            <td>Matcha Hot Chocolate</td>
            <td>$100.00</td>
        </tr>
        <tr>
            <td>Strawberry Matcha</td>
            <td>$150.00</td>
        </tr>
        <tr>
            <td>Matcha Lattes</td>
            <td>$200.00</td>
        </tr>
        <tr>
            <td>Black Forest</td>
            <td>$157.00</td>
        </tr>
        <tr>
            <td>Ice Caramel Macchiato</td>
            <td>$110.00</td>
        </tr>
    </table>

    <form method="post">
        <h1>Select your order:</h1>
        <select name="order" id="order" style="border: 2px solid blue; padding: 15px; font-size: 22px;">
            <option value="1">Matcha hot chocolate - $100.00</option>
            <option value="2">Strawberry matcha - $150.00</option>
            <option value="3">Matcha lattes - $200.00</option>
            <option value="4">Black Forest - $157.00</option>
            <option value="5">Ice Caramel Macchiato - $110.00</option>
        </select>
        <br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required style="font-size: 22px;">
        <br><br>

        <label for="takeout">Takeout:</label>
        <input type="checkbox" name="takeout" id="takeout">
        <br><br>

        <label for="dine_in">Dine in:</label>
        <input type="checkbox" name="dine_in" id="dine_in">
        <br><br>

        <input type="submit" value="Calculate Total" style="font-size: 20px; padding: 10px 20px;">
    </form>

    <?php 
    function get_price($item) {
        $prices = [
            "Matcha hot chocolate" => 100.00,
            "Strawberry matcha" => 150.00,
            "Matcha lattes" => 200.00,
            "Black Forest" => 157.00,
            "Ice Caramel Macchiato" => 110.00,
        ];
        return isset($prices[$item]) ? $prices[$item] : 0;
    }

    function calculate_tax($amount, $is_takeout) {
        $tax_rate = $is_takeout ? 0.12 : 0;
        return $amount * $tax_rate;
    }

    function calculate_total($order, $quantity, $is_takeout) {
        $price = get_price($order);
        $subtotal = $price * $quantity;
        $tax = calculate_tax($subtotal, $is_takeout);
        return $subtotal + $tax;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $menu_items = [
            "Matcha hot chocolate",
            "Strawberry matcha",
            "Matcha lattes",
            "Black Forest",
            "Ice Caramel Macchiato"
        ];

        if (!isset($_POST["order"]) || !is_numeric($_POST["order"])) {
            echo "Invalid input!";
            exit;
        }

        $choice = intval($_POST["order"]);
        if ($choice < 1 || $choice > 5) {
            echo "Invalid choice!";
            exit;
        }

        $order = $menu_items[$choice - 1];
        $quantity = isset($_POST["quantity"]) ? intval($_POST["quantity"]) : 0;
        $is_takeout = isset($_POST["takeout"]);

        if ($quantity <= 0) {
            echo "Invalid quantity!";
            exit;
        }

        $total_amount = calculate_total($order, $quantity, $is_takeout);
        $order_type = $is_takeout ? "Take-out" : "Dine-in";

        echo "<div class='order-summary'>";
        echo "<p><strong>Order Summary:</strong></p>";
        echo "<p>Item: $order</p>";
        echo "<p>Quantity: $quantity</p>";
        echo "<p>Order Type: $order_type</p>";
        echo "<p>Total amount to pay: $" . number_format($total_amount, 2) . "</p>";
        echo "</div>";
    }
    ?>

</body>
</html>
