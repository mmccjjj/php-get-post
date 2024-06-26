<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
</head>

<body>

<!-- <form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Senden">
</form> -->

<!-- <form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="age">Alter:</label>
    <input type="number" name="age" id="age" required>
    <br>
    <input type="submit" value="Senden">
</form> -->

  <?php

 /*  phpinfo(); */
  include 'get_my_name.php';
  ?>

<!-- <form method="POST" action="">
    <label for="farbe">Farbe:</label> -->
    <!-- schreibe ein Pflichtfeld (Text) für farbe -->
<!--     <input type="text" name="farbe" id="farbe" required>
    <input type="submit" value="Hinzufügen">
</form>
 -->
<!-- <h2>Farben:</h2>
<ul> -->
<!--     <?php
    foreach ($farbenArray as $farbe) {
        echo "<li>" . htmlspecialchars($farbe) . "</li>";
    }
    ?> -->
<!-- </ul> -->

<form method="POST" action="">
    <label for="index">Index zum Löschen:</label>
    <!-- schreibe ein Pflicht Input-Feld für den index -->
    <input type="text" name="index" id="index" required>
    <input type="submit" value="Löschen">
</form>

<h2>Farben:</h2>
<ul>
    <?php
    foreach ($farbenArray as $farbe) {
        echo "<li>" . htmlspecialchars($farbe) . "</li>";
    }
    ?>
</ul>

</body>

</html>