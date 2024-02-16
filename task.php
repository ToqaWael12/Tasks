<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dsn = 'mysql:host=localhost;dbname=product';
    $user = 'root';
    $pass = '';
    $options = array(
        pdo::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    try {
        $db = new PDO($dsn, $user, $pass, $options);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = "INSERT INTO items (name) VALUES ('product3');";
        $db->exec($q);
    }
    catch(PDOException $e) {
        echo 'Failed' . $e->getMessage();
    }
    ?>
</body>
</html>