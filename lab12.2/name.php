<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php
$name = "%".$_GET["name"]."%";
$stmt = $pdo->prepare("select username,name,address,mobile from member where username like ?");
$stmt->bindParam(1, $name);
$stmt->execute();
$row = $stmt->fetch()
?>
<table border="1">
    <tr>
        <th>username</th>
        <th>name</th>
        <th>address</th>
        <th>mobile</th>
    </tr>
    <tr>
        <td><?= $row['username'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['address'] ?></td>
        <td><?= $row['mobile'] ?></td>
    </tr>
</table>