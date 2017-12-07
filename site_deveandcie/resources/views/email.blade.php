<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Fichier téléchargé !</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Expéditeur</strong> : {{ $contact['exp_mail'] }}</li>
      <li><strong>Destinataire</strong> : {{ $contact['dest_mail'] }}</li>
      <li><strong>Message</strong> : {{ $contact['dest_message'] }}</li>
      <li><strong>Nom du fichier</strong> : {{ $contact['file_name'] }}</li>
      <li><strong>Lien de téléchargement</strong> : {{ $contact['file_name'] }}</li>
    </ul>
  </body>
</html>