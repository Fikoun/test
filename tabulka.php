<?php
$celySoubor = file_get_contents("data.csv");

$rows = explode("\n", $celySoubor);



?>

<h2>Hráči uložení v souboru</h2>

<table border="1">
    <tr>
        <th>Jmeno</th>
        <th>HP</th>
        <th>Mana</th>
        <th>Gold</th>
    </tr>

    <?php

    foreach ($rows as $row) {
        echo "<tr>";

        $attributes = explode(";", $row);
        foreach ($attributes as $attr) {
            echo "<td> $attr </td>";
        }

        echo "</tr>";
    }

    ?>
    
</table>

<style>
    body {
        background-color: #f9f9e4;
    }
    table {
       border-collapse: collapse;
    }
    td {
        padding: 5px 15px; 
    }
    
    th {
        font-size: 19px;
        padding: 10px 25px;
        color: red;
    }


    tr:nth-child(odd) {
        background: lightgray;
    }
</style>