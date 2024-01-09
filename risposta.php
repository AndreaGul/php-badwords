
<?php


  $parag = $_GET['paragraf'];
  $word = $_GET['noWord'];
  $cens_paragraf = str_replace( $word, '***' , $parag );
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
  <div>
  <h2>Paragrafo</h2>
  <p> <?php echo $parag; ?> </p>
  <h4>Lunghezza del paragrafo</h4>
  <p> <?php echo strlen($parag); ?></p>

  <h2>Parola da censurare</h2>
  <p> <?php echo $word; ?></p>
  <h2>Paragrafo censurato</h2>
  <p> <?php echo $cens_paragraf; ?></p>
  <h4>lunghezza paragrafo censurato</h4>
  <p> <?php echo strlen($cens_paragraf); ?></p>

</div>
</body>
</html>


