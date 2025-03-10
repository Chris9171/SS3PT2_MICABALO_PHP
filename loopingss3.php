<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Structures: While and Do-While Loop</title>
    <style type="text/css">
        body {
            background-color: rgb(203, 88, 88);
            color: white; 
            text-align: center;
            padding: 20px;
        }
        input {
            padding: 20px;
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            background-color: rgb(90, 226, 231);
            color: navy; 
            border: 16px solid skyblue;
            cursor: pointer;
        }
        button:hover {
            background-color: rgb(229, 117, 83);
        }
    </style>
</head>
<body>

    <h3>Calculate Sum of Squares and Cubes</h3>

    <form method="POST">
        <label for="limit">Enter the Upper Limit:</label>
        <input type="number" id="limit" name="limit" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        
        $n = $_POST["limit"];
    if ($n > 0) 
        $squares = 0;
        $cubes = 0;

        
        $i = 1;
        for ($i = 1; $i <= $n;  $i++) {
            $squares += $i * $i;
            $cubes +=  $i * $i * $i;
        }
        echo "<divc class='result'>";
        echo "<h2>The sum of Squares from 1 to $n is $squares.</h2>";
        echo "<h2>The sum of Cubes from 1 to $n is $cubes.</h2>";
    }
    ?>

</body>
</html>