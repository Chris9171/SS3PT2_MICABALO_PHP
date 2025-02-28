<title>Conditional Control Statements</title>
<style type="text/css">
body {
	background-color:rgb(22, 234, 230);
}
</style>
<?php
function calculateCalories($weight, $lifestyle) {
    if ($lifestyle === 'A') {
        $activityFactor = 15;
    } elseif ($lifestyle === 'S') {
        $activityFactor = 13;
    } else {
        return "Invalid lifestyle choice. Please enter 'A' for active or 'S' for sedentary.";
    }
    
    $recommendedCalories = $weight * $activityFactor;
    return "Based on your weight of $weight kg and your lifestyle ($lifestyle), you should consume approximately $recommendedCalories calories per day.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['weight']) && isset($_POST['lifestyle'])) {
        $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);
        $lifestyle = strtoupper(trim($_POST['lifestyle']));
        
        if ($weight === false || $weight <= 0) {
            echo "Invalid input. Please enter a valid weight.";
        } else {
            echo calculateCalories($weight, $lifestyle);
        }
    } else {
        echo "No input received.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calorie Recommendation</title>
</head>
<body>
    <form method="POST">
        <label for="weight">Enter your weight (kg):</label>
        <input type="number" step="0.1" name="weight" id="weight" required>
        <br>
        <label for="lifestyle">Enter your lifestyle (A for Active, S for Sedentary):</label>
        <input type="text" name="lifestyle" id="lifestyle" maxlength="1" required>
        <br>
        <button type="submit">Calculate Calories</button>
    </form>
</body>
</html>
