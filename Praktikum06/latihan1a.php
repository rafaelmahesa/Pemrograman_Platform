<?php
    $suhu = [23,45,36,27,33,32,30,28,35,32];
    $x=1;
    echo "<table style='border: 1px solid'>";
    foreach ($suhu as $s){
        echo "<tr>
                <td style='border: 1px solid'>Hari ke-$x</td>
                <td style='border: 1px solid'>$s</td>
              </tr>";
        $x++;
    }
    echo "</table>";
?>