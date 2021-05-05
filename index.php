<?php
include __DIR__ . "/vendor/autoload.php";

use App\controller\BaseController;

$controller = new BaseController();
$result = $controller->getAllCustomer();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <th>customerNumber</th>
    <th>contactLastName</th>
    <th>contactFirstName</th>
    <th>phone</th>
    <th>addressLine1</th>
    <th>addressLine2</th>
    <th>city</th>
    <th>state</th>
    <th>postalCode</th>
    <th>country</th>
    <th>salesRepEmployeeNumber</th>
    <th>creditLimit</th>
    <?php foreach ($result as $user): ?>
        <tr>
            <td><?php echo $user['customerNumber'] ?></td>
            <td><?php echo $user['contactLastName'] ?></td>
            <td><?php echo $user['contactFirstName'] ?></td>
            <td><?php echo $user['phone'] ?></td>
            <td><?php echo $user['addressLine1'] ?></td>
            <td><?php echo $user['addressLine2'] ?></td>
            <td><?php echo $user['city'] ?></td>
            <td><?php echo $user['state'] ?></td>
            <td><?php echo $user['postalCode'] ?></td>
            <td><?php echo $user['country'] ?></td>
            <td><?php echo $user['salesRepEmployeeNumber'] ?></td>
            <td><?php echo $user['creditLimit'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

