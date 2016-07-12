<?php
function MTable($a)
{
    echo "<tr>";
    for ($_ = 1; $_ <= 10; $_++) {
        echo "<td>" . $_ . "x" . $a . " = " . ($a * $_) . " | </td>";
    }
    echo "</tr>";
}

echo "<table>";
for ($_ = 1; $_ <= 10; $_++) {
    MTable($_);
}
echo "</table>";
