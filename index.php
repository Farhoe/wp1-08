<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $sargeras=True;
    $antorus=True;
    $onyxia=True;
    $nefarian=True;
    $vancleef=True;
    $captaincookie=True;
     ?>

     <?php

  if (($sargeras) && ($antorus)) {
    echo "Planetary Hoonter";
  }

  elseif (($onyxia) && ($nefarian)) {
    echo "Dragon Hoonter";
  }

  elseif (($vancleef) && ($captaincookie)) {
    echo "Pirate Hoonter";
  }

  else {
    echo "Bad Hoonter";
  }
      ?>
  </body>
</html>
