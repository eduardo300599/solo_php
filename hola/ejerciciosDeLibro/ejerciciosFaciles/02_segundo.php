<?php
echo "<table border='1'>";
echo "<tr>";
for($i=1; $i<=12; $i++)
{
    echo "<th>";
    echo "tabla del $i";
    echo "</th>";
}
echo "</tr>";

$indice = 1;
echo "<tr>";
while($indice<=12)
{
    echo "<th>";

    for($i=1; $i<=12; $i++)
    {

        echo $indice ."x". $i ."=". $indice*$i;
        echo "<br/>";


    }
    echo "</th>";
    $indice++;
}
echo "</tr>";

echo "</table>";
