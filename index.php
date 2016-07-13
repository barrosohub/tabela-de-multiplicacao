<!DOCTYPE html>
<head>
    <title>Simple Table</title>
    <link href="default.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Multiplication Table</h1>
<?php
function MTable($n)
{
    echo "<tr>";
    for ($m = 1; $m <= 10; $m++) {
        echo "<td>" . $m . "x" . $n . " = " . ($m * $n) . "</td>";
    }
    echo "</tr>";
}
echo "<table style='width: 100%;'>";
for ($m = 1; $m <= 10; $m++) {
    MTable($m);
}
echo "</table>";
?>
</body>
</html>
