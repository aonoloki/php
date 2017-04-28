<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Chat AJAX php/jquery</title>
  <link rel="stylesheet" href="../css/chat.css">
</head>
<body>

<table class="body">

  <tr>
    <td class="titre">
      ChAJAX !
    </td>
  </tr>

  <tr>
    <td style="height:500px">
      <!-- Les messages seront affichés ici -->
      <div class="display">

      </div>
    </td>
  </tr>

  <tr>
    <td class="form" valign="top">
      <!-- le formulaire d'envoi sera ici -->
      <table class="uform">
        <tr>
          <td style="width:30%">
            <label for="name">
              Pseudo
            </label>
          </td>
          <td style="width:60%">
            <label for="message">
              Message
            </label>
          </td>
          <br>
        </tr>
        <tr>
          <td>
            <input type="text" id="pseudo" name="pseudo" value="Votre pseudo">
          </td>

          <td>
            <input type="text" id="message" name="message" value="Votre message">
          </td>

          <td>
            <button type="button" id="submit">Envoyer</button>
          </td>
        </tr>
      </table>
    </td>
  </tr>

</table>

</body>
</html>
