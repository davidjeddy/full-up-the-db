<?php
declare(strict_types = 1);
ini_set('display_errors', '1');

$pdo = connect();
$counter = 0;
$max = 2147483648;

// conn to DB

// print start date time
echo date() . "\n";

// loop till max reached
while ($counter < $max) {

    if ($counter > 10) { break; }

    $data = $pdo->query("INSERT value= sex, name, car FROM users")->execute();;

    $counter++;
}
// print ending date time
echo date() . "\n";

// functions

/**
 * @return pdo
 */
function connect() : \pdo
{
    $host = 'fillupthedb_mariaDb_1';
    $db   = 'test';
    $user = 'root';
    $pass = 'password';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    return $pdo;
}
