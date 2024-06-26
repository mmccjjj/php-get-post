<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/calculator.css">
    <link rel="stylesheet" href="/build/css/reset.css">
    <title>Calculator</title>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <input type="number" name="num01" placeholder="00000" required>
    <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="00000" required>
    <button>Calculate</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){

    // Daten von Inputs
    $num01= filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT);
    $num02= filter_input(INPUT_POST, 'num02', FILTER_SANITIZE_NUMBER_FLOAT);
    $operator= htmlspecialchars($_POST['operator']);

    //Error handlers

    $errors= false;

    if(empty($num01) || empty($num02) || empty($operator)){
        echo "<p class= 'clac-error'>Fill in all fields!</p>";
    }
}

?>
    
</body>
</html>