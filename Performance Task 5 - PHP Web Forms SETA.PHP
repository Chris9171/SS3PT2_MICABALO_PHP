<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Structures: While and Do-While Loop</title>
    <style type="text/css">
       body {
        font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg,rgb(255, 25, 179),rgb(1, 186, 248),rgb(187, 11, 214),rgb(118, 192, 111));
            background-size: 400% 400%;
            animation: gradientBG 5s ease infinite;
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
        <h1>GRADE CALCULATOR</h1>
    <form action="" method="POST">
        <label>1st Quarter Grade</label> <input type="number" name="1stquarter"><br>
        <label>2st Quarter Grade</label> <input type="number" name="1stquarter"><br>
        <label>3st Quarter Grade</label> <input type="number" name="3rdquarter"><br>
        <label>4st Quarter Grade</label> <input type="number" name="4thquarter"><br>
        <input type="submit" name="submit">
    </form>

<?php
if (isset($_POST['submit'])) {

    $first_quarter = $_POST['1stquarter'];
    $second_quarter = $_POST['1stquarter'];
    $third_quarter = $_POST['3rdquarter'];
    $fourth_quarter = $_POST['4thquarter'];

    $averageGrade = ($first_quarter + $second_quarter + $third_quarter + $fourth_quarter) / 4;

if ($averageGrade >= 90 && $averageGrade <=100) {
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>OUTSTANDING!!!";
   echo "<br><br>Passed";

}elseif ($averageGrade >= 85 && $averageGrade <=89){
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>VERY SATISFACTORY!!!";
   echo "<br><br>Passed";

}elseif ($averageGrade >= 80 && $averageGrade <=84){
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>SATISFACTORY!!!";
   echo "<br><br>Passed";

}elseif ($averageGrade >= 75 && $averageGrade <=79){
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>FAIRLY SATISFACTORY!!!";
   echo "<br><br>Passed";

}elseif ( $averageGrade <=74) {
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>DID NOT MEET EXPECTATIONS!!!";
   echo "<br><br>Failed";
}
}
   ?>
    </body>
</html>
