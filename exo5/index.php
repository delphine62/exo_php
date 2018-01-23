
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo5</title>
  </head>
  <body>
  <?php

$table = 13;
$res = 'table de multiplication de '.$table.'<br />';
$i = 1;

do {
    $res .= $i.' * '.$table.' = '.$i*$table.'<br />';
    $i++;
}
while ($i <= 10);

echo $res;
?>
</body>
</html>
