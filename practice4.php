<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = (int)$_POST['jsValue'];
    echo "Multiplication Table of $num:<br>";
    echo "<table border='1'>";
    echo "<tr><th></th>";
    for ($col = 1; $col <= $num; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";
    for ($row = 1; $row <= $num; $row++) {
        echo "<tr>";
        echo "<th>$row</th>"; 
        for ($col = 1; $col <= $num; $col++) {
            $product = $row * $col;
            echo "<td>$product</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>