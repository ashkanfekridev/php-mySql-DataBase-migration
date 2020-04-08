<?php
require_once __DIR__ . '/src/Schema.php';

 Schema::create('user', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('password');
    $table->text('bio');

});


echo  $sql = Schema::build();

$dsn = 'mysql:host=localhost;dbname=laravel_blog';
$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];


$conn = new PDO($dsn, 'root', '',$options);
$conn->query($sql);

return;



header('Content-Type: application/json');
echo json_encode($sql, JSON_PRETTY_PRINT);
