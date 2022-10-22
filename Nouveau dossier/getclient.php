<html>
<head>
<title>Page de récupération des informations</title>
</head>
<body>
<?php
require_once'client.php';
if(emptty($_GET['nom'])||empty($_GET['prenom'])||empty($_GET['email'])||empty($_GET['tel'])):
echo'erreur il faut remplir tous les champs';
else:
if(!is_numeric($_GET['tel'])):
echo'le tel doit etre numérique';
?>
<h3>informations du client</h3>
<table>
<tr><td>nom</td>
<td><?= Client::getNom();?></td></tr>
<tr><td>nom client:</td>
<td><?= $client->getPrenom();?></td></tr>
<tr><td>prenom client:</td>
<td><?= $client->getEmail();?></td></tr>
<tr><td>email du client:</td>
<td><?= $client->getTel();?></td></tr>
<tr><td>numéro du client:</td>
</table>
<?php endif; endif; ?>
</body>
</html>