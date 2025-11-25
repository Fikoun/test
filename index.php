<?php
// Načte a zobrazí data souboru
require_once("tabulka.php");
?>

<h2>Vytvoř staty hráče</h2>
<form action="index.php" method="GET">
    <label for="name">Jmeno hrace: </label>
    <input type="text" name="name"> <br>

    <label for="hp">HP hrace: </label>
    <input type="number" name="hp"> <br>

    <label for="mana">Mana hrace: </label>
    <input type="number" name="mana"> <br>

    <label for="email">Email:</label>
    <input type="text" name="email"> <br>

    <input type="submit">
</form>

<?php
// Zpracuje a uloží data formuláře
require_once("ulozeni.php");
