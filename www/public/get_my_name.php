<?php
/* if(isset($_GET['name'])){
    $name= $_GET['name'];
    echo "Hallo $name";

}else{
    echo "Bitte Namen in die URL eintragen";
   
} */

echo '<br>';


/* if($_SERVER['REQUEST_METHOD']== 'POST'){
    $neuerName= htmlspecialchars($_POST['name']);
    echo "Hallo $neuerName";
}else{
    echo "Bitte Namen eintragen";
}

echo '<br>'; */

/* if(isset($_GET['name'])&& isset($_GET['age'])){
    $name= $_GET['name'];
    $age= $_GET['age'];

    echo 'Hallo '. htmlspecialchars($name). ' Du bist '. htmlspecialchars($age). ' Jahre alt.';
}else{
    echo 'Bitte Namen und Alter in Url eingeben';
} */



/* if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $name= htmlspecialchars($_POST['name']);
    $age= htmlspecialchars($_POST['age']);
    if (is_numeric($age)&& $age> 0){
        echo 'Hallo '. $name. ' Du bist '. $age. ' Jahre alt.';
    }else{
        echo 'Bitte gebe Sie ein gültiges Alter ein.';
    }
} */

/* $farbenArray = ["Rot", "Blau", "Grün", "Gelb", "Orange"];

if (isset($_GET['index'])) {
   $index= htmlspecialchars($_GET['index']);

    if (isset($farbenArray[$index])) {
        echo "Die Farbe ist: " . htmlspecialchars($farbenArray[$index]);
    } else {
        echo "Index außerhalb des Bereichs.";
    }
} else {
    echo "Bitte geben Sie einen Index in der URL ein.";
}
 */
/* $farbenArray = ["Rot", "Blau", "Grün", "Gelb", "Orange"]; */

// prüfe ob wir ein POST Methode erhalten
/*  if(isset($_POST['farbe'])){
    $farbe= htmlspecialchars($_POST['farbe']);
    $farbenArray[] = $farbe;
 } */
    // hole die farbe aus dem POST Request und schreibe sie in die Variable $farbe
    $farbenArray = ["Rot", "Blau", "Grün", "Gelb", "Orange"];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $index= htmlspecialchars($_POST['index']);
    
        if (isset($farbenArray[$index])) {
            unset($farbenArray[$index]);
            // Array neu indizieren
            $farbenArray = array_values($farbenArray);
        } else {
            echo "Index außerhalb des Bereichs.<br>";
        }
    }



?>