<!DOCTYPE html>
<html>
<head>
    <title>Page Admin</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Css/SuperAdmin.css" />
</head>
<body>

<h1>Page Admin</h1>

<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 17/12/2017
 * Time: 11:25
 */

require_once("Gateways/ClientGateway.php");
require_once("Metier/News.php");

$clientGateway = new ClientGateway();
$tabDeClients = $clientGateway->getClients();
$nombreDeClients = $clientGateway->getNombreClients();

?>


<table>
    <caption>Liste des Clients</caption>
    <tr>
        <th>Id</th>
        <th>Login</th>
        <th>Password</th>
    </tr>

    <?php
    for ($i = 0; $i < $nombreDeClients; $i++){
        echo '<tr><td>'.$tabDeClients[$i]['id'].'</td><td>'.$tabDeClients[$i]['login'].'</td><td>'.$tabDeClients[$i]['password'].'</td></tr>';
    }
    ?>
</table>

<h2>Ajouter un Client :</h2>
<form method="POST">
    Login : <input type="text" name="login"/>
    Password : <input type="password" name="password"/>

    <input type="submit" name="action" value="Ajouter"/>


</form>

<h2>Supprimer un Client :</h2>
<form method="POST">
    ID : <input type="text" name="id"/>


    <input type="submit" name="action" value="SupprimerClient"/>

</form>

</body>

</html>