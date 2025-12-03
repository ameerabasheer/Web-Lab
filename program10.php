<?php
$students = array("ameera","ciyana","basima","sneha");
echo "<h2>array before sorting:</h2>";
print_r($students);
echo "<br><br>";
asort($students);
echo "<h2>array after ascending sorting(asort):</h2>";
print_r($students);
echo "<br><br>";
arsort($students);
echo "<h2>array after descending sorting(arsort):</h2>";
print_r($students);
?>
