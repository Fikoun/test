<pre>

<?php

// Byla odeslána data?
if (isset($_GET["name"])
    &&  isset($_GET["hp"])
    &&  isset($_GET["mana"])
) {

    if ( strlen($_GET["name"]) > 15 ) {
        echo "Bohužel jméno je moc dlouhé (max 15 znaků)";
        exit();
    }

    if (preg_match("^\S+@\S+\.\S+$^", $_GET["email"]))
    {
        echo "<p style='color:green;'>Email validní.</p>";
    }
    else
    {
        echo "<p style='color:red;'>Email není validní!</p>";
        exit();
    }

    $player = [
        "name" => $_GET["name"],
        "hp" => $_GET["hp"],
        "mana" => $_GET["mana"],
        "gold" => 0
    ];

    $puvodniData = file_get_contents("data.csv");
    $novyRadekHrace = implode(";", $player);
    $noveCSV = $puvodniData . $novyRadekHrace . "\n";

    file_put_contents("data.csv", $noveCSV);

    echo "nový hráč úspěšně uložen";

} else {
    echo "Nejprve zadejte platné hodnoty";
}


?>
</pre>