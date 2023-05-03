<?php
function drawPattern2($pattern, $baris = 5, $symbol = '*') {
    switch ($pattern) {
        case "upside_left":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = $i; $j <= $baris; $j++) {
                    echo "$symbol ";
                }
                echo "<br>";
            }
            break;
        case "downside_left":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "$symbol ";
                }
                echo "<br>";
            }
            break;
        case "upside_right":
            for ($i = 1; $i <= $baris; $i++) {
                for ($j = 1; $j <= $baris-$i; $j++) {
                    echo "&nbsp;&nbsp;"; // memberikan spasi
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "$symbol";
                }
                echo "<br>";
            }
            break;
        case "downside_right":
            for ($i = $baris; $i >= 1; $i--) {
                for ($j = 1; $j <= $baris-$i; $j++) {
                    echo "&nbsp;&nbsp;"; // memberikan spasi
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "$symbol";
                }
                echo "<br>";
            }
            break;
        default:
            echo "Pola tidak dikenali.";
            break;
    }
}

drawPattern2("upside_left", 6, '$'); 
echo "<br>";
drawPattern2("downside_left", 10, '@'); 
echo "<br>";
drawPattern2("upside_right", 9, '#'); 
echo "<br>";
drawPattern2("downside_right", 7); 
?>