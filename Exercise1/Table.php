<?php

  echo "<table>";

  for ($row = 0; $row < 101; $row++)
  {
    echo "<tr>";

    for ($col = 0; $col < 101; $col++)
    {
      if ($row == 0 && $col == 0)
      {
        echo "<th></th>";
      }

      elseif ($row != 0 && $col == 1)
      {
        echo "<th> $row </th>";
      }
      elseif ($row == 1 && $col != 0)
      {
        echo "<th> $col </th>";
      }

      else
      {
        $product = $row * $col;
        echo "<td> $product </td>";
      }
    }

    echo "/tr";
  }

  echo "/table";

?>
