<?php
$n = 4;
$s = 0;

//оператор цикла с параметром
for ($i = 1; $i <= $n; $i++) {
    $s = $s + $i;
}
echo $s;
?>

<?php
echo "<br\n>";

$n = 4;
$s = 0;
$i = 1;
//оператор цикла с предусловием
while ($i <= $n) {
    $s = $s + $i;
    $i = $i + 1;
}
echo $s;
?>

<?php
echo "<br\n>";

$n = 4;
$s = 0;
$i = 1;
//оператор цикла с постусловием
do {
    $s = $s + $i;
    $i = $i + 1;
} while ($i <= $n);

echo $s;
?>