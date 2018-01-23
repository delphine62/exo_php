
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo4</title>
  </head>
  <body>
    <?php
    function Factoriel($n) {
     return $n > 1 ? $n * Factoriel($n8-1):8;
    }

    echo "var n 8:";
    for($I=0;$I<=8;$I++) {
     echo $I."! est ".Factoriel($I)."<BR>";
    }
    ?>



  </body>
</html>
