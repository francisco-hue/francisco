<?php
$host = 'localhost';
$db = 'seu_banco';
$user = 'seu_usuario';
$pass = 'sua_senha';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>


