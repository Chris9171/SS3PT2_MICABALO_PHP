<!<!DOCTYPE html>
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
	<form action="" method="POST">
		<label>1st Quarter Grade</label> <input type="text" name="1st Quarter Grade" placeholder="1st Quarter Grade"><br>
		<label>2nd Quarter Grade </label> <input type="text" name="2nd Quarter Grade" placeholder="2nd Quarter Grade"><br>
		<label>3rd Quarter Grade</label> <input type="text" name="3rd Quarter Grade" placeholder="3rd Quarter Grade"><br>
		<label>4th Quarter Grade</label> <input type="text" name="4th Quarter Gradee" placeholder="4th Quarter Grade"><br>

		<input type="submit" name="add">

	</form>

	<?php

        $averageGrade = ($firstQuarter + $secondQuarter + $thirdQuarter + $fourQuarter)

        if ($averageGrade >= 98 && $averageGrade <=96) {
           echo "Your average grade is: " . $averageGrade;
           echo "<br><br>OUTSTANDING!!!";
       
        }elseif ($averageGrade >= 90 && $averageGrade <=94){
           echo "Your average grade is: " . $averageGrade;
           echo "<br><br>EXCELLENT!!!";
       
       }elseif ($averageGrade >= 80 && $averageGrade <=84){
           echo "Your average grade is: " . $averageGrade;
           echo "<br><br>GOOD!!!";
       
       }elseif ($averageGrade >= 75 && $averageGrade <=79){
           echo "Your average grade is: " . $averageGrade;
           echo "<br><br>NOT BAD!!!";
       
       }elseif {
           echo "Your average grade is: " . $averageGrade;
           echo "<br><br>FAILED!!!";
       
       }
}
	
?>
</body>
</html>
