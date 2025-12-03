<?php
$indianPlayers = array("MS Dhoni", "Sachin Tendulkar", "virat kohli", "Ravindra jadeja","mohammed shami");
echo "<table border='1'>
       <tr>
       <th>SL NO</th>
       <th>player name</th>
       </tr>";
 $i=1;
  foreach ($indianPlayers as $player) {
echo "<tr>
        <td>$i</td>
        <td>$player</td>
        </tr>";
        $i++;
        }
echo "<table>";
?>   
   
