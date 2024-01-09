<?php


  
  $cens_paragraf = str_replace( $_GET['noWord'], '***' , $_GET['paragraf'] );
  
?>

<div>
  <h2>Paragrafo</h2>
  <p> <?php echo $_GET['paragraf']; ?> </p>
  <h4>Lunghezza del paragrafo</h4>
  <p> <?php echo strlen($_GET['paragraf']); ?></p>

  <h2>Parola da censurare</h2>
  <p> <?php echo $_GET['noWord']; ?></p>
  <h2>Paragrafo censurato</h2>
  <p> <?php echo $cens_paragraf; ?></p>
  <h4>lunghezza paragrafo censurato</h4>
  <p> <?php echo strlen($cens_paragraf); ?></p>

</div>
