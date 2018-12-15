<?php
$isOk = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part2 exe7</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>
    <?php
    if ($isOk == false){ ?>
      <p id="wrong" >c'est pas bon !!!</p>
    <?php }else{?>
      <p id="right" >c'est ok !!</p>
    <?php }
        /*  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';*/
        ?>
      </p>
    </body>
    </html>
