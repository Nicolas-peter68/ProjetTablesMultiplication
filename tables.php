<?php
$num = rand(1, 12);
echo "Table de $num <br>";
for ($i = 1; $i <= 12; $i++) {
    echo $i . '*' . $num . ' = ' . $i * $num . '</br>';
}
