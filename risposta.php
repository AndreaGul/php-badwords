
<?php


  $parag = $_GET['paragraf'];
  $word = $_GET['no-word'];
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
  <h4>La lunghezza del paragrafo è di <?php echo strlen($parag);?> caratteri</h4>
  

  <h2>Parola da censurare</h2>
  <p> <?php echo $word; ?></p>
  <h2>Paragrafo censurato</h2>
  <p> <?php echo $cens_paragraf; ?></p>
  <h4>La lunghezza del paragrafo censurato è di <?php echo strlen($cens_paragraf);?> caratteri</h4>
  

</div>
</body>
</html>


