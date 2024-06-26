<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$farbenArray = ["Rot", "Blau", "Grün", "Gelb", "Orange"];


// prüfe ob es ein POST Request ist.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // hole die Farbe aus dem POST Request und schreibe sie in die Variable $farbe
    $farbe= htmlspecialchars($_POST['farbe']);
    $farbenArray[] = $farbe;
}

// Was passiert hier?
$filter = isset($_GET['filter']) ? $_GET['filter'] : '';
?>

<form method="POST" action="">
    <label for="farbe">Farbe:</label>
    <input type="text" name="farbe" id="farbe" required>
    <input type="submit" value="Hinzufügen">
</form>

<form method="GET" action="">
    <label for="filter">Filter:</label>
    <input type="text" name="filter" id="filter" value="<?php echo htmlspecialchars($filter); ?>">
    <input type="submit" value="Filtern">
</form>

<h2>Farben:</h2>
<ul>
    <?php
    foreach ($farbenArray as $farbe) {
        if ($filter == '' || strpos(strtolower($farbe), strtolower($filter)) !== false) {
            echo "<li>" . htmlspecialchars($farbe) . "</li>";
        }
    }
    ?>
</ul>
    
</body>
</html>