<?php
/**
 * @constante DATABASE Valores para conexao ao banco de dados em produção
 */
define('DATABASE', [
    'host' =>     'den1.mysql4.gear.host',
    'dbname' =>   'db3venda1',
    'user' =>     'db3venda1',
    'password' => 'Vn214-Ctvf?w',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_EMULATE_PREPARES => false
    ],
]);

date_default_timezone_set('America/Sao_Paulo');

define('ROOT','http://localhost/mvc2020/');