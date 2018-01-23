<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo3</title>
  </head>
  <body>
    <?php
    function Factoriel($n) {
     return $n > 1 ? $n * Factoriel($n-1):1;
    }

    echo "Liste des 10 premiers factoriels entiers:<BR>";
    for($I=0;$I<=10;$I++) {
     echo $I."! est ".Factoriel($I)."<BR>";
    }
    ?>




  </body>
  </html>
