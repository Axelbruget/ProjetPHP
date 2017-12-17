
<!DOCTYPE html>
<html>
<head>
    <title>PageConnection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="Css/SuperAdmin.css" />
</head>
<body>

<h1>Administration</h1>

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

$tabDesAdmins = $clientGateway->getAdmins();
$nombreAdmins = $clientGateway->getNombreAdmins();
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


<table>
    <caption>Liste des Administrateurs</caption>
    <tr>
        <th>Id</th>
        <th>Login</th>
        <th>Password</th>
    </tr>

    <?php
    for ($i = 0; $i < $nombreAdmins; $i++){
        echo '<tr><td>'.$tabDesAdmins[$i]['id'].'</td><td>'.$tabDesAdmins[$i]['login'].'</td><td>'.$tabDesAdmins[$i]['password'].'</td></tr>';
    }
    ?>
</table>




</body>

</html>