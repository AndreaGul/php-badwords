<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BADWORDS</title>
</head>
<body>
    <h2>Censura il tuo paragrafo</h2>
    

    <form action="risposta.php" method="GET">
      <label for="paragraf">Paragrafo</label>
      <textarea name="paragraf" id="paragraf" cols="30" rows="10"></textarea>
      <label for="noWord">Parola da censurare</label>
      <input type="text" name="noWord" id="noWord">
      <button>invia</button>

    </form>
</body>
</html>