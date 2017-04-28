<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="ajax.js"></script>
</head>

<body>

  <form action="ajax.php" method="POST">
    <input type="text" id="lastname" name="lastname" maxlength="50" placeholder="Nom"><br>
    <input type="text" id="firstname" name="firstname" maxlength="50" placeholder="Prénom"><br>
    <input type="text" id="email" name="email" placeholder="Email"><br>
    <input type="text" id="tel" name="tel" placeholder="Téléphone"><br>
    <input type="submit" name="submit">
  </form>

</body>

</html>
