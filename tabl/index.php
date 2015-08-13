
<?php
$rows= 10;
$cols = 10;

echo '<table cellspacing="10" border="1">';
for ($i =0; $i <$rows; $i++)
    {
        echo "<tr>";
        for($j = 0; $j<$cols; $j++){

              if($i==5 and $j==5)
              {
                  echo "<td style='background:#333'>"."</td>";
              }
              elseif($i == 5 and $j==6)
              {
                  echo "<td style='background:#333'>"."</td>";
              }

            else {
                echo "<td>" . $i * $j . "</td>";
            }


        }
        echo "</tr>";
    }

echo "</table>";


?>


