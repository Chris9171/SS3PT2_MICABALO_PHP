<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Structures: While and Do-While Loop</title>
    <style type="text/css">
       body {
        font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg,rgb(42, 238, 16),rgb(8, 216, 144),rgb(58, 38, 187),rgb(213, 20, 175));
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            overflow: hidden;
       }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        input {
            padding: 20px;
            margin-top: 20px;
        }
        button {
            padding: 10px 20px;
            background-color: rgb(26, 252, 233);
            color: navy; 
            
        }
        button:hover {
            background-color: rgb(13, 232, 248);
        }
    </style>
</head>
<body>

    <h1>Calculate Sum of Squares and Cubes</h1>

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
