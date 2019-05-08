<table border="1" width="100%">
      <?php
      define("LINES",2);
      define("LINEFROM",2);
      define("LINETO",5);
      for ($k = 0; $k < LINES; $k++) {
        echo '<tr>';
        for ($j = LINEFROM; $j <= LINETO ; $j++) {
          $newj = $j + $k * (LINETO - LINEFROM + 1);
          echo '<td bgcolor="'.((($newj + $k) % 2 == 0)?'yellow' : 'pink').'">';
          for ($i=1; $i <= 9; $i++) {
            $r = $newj * $i;
            echo "{$newj} x {$i} = {$r}<br>";
          };
          echo '</td>';
        }
        echo '</tr>';
      }
       ?>
</table>
