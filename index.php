<?php
declare(strict_types = 1);
ini_set('display_errors', '1');

// conn to DB
$pdo = connect();
$data = createData();

// loop till max reached
while (0 < 1) {
    try {
        $pdo->prepare("INSERT INTO signed(value) VALUES ('z')$data")->execute();
    } catch (PDOException $e) {
        throw new \Exception($e->getMessage());
    }
}

echo 'Oops: Did not get a PDO exception.';

// functions

/**
 * @return pdo
 */
function connect() : \pdo
{
    // obv. if this was a real app we would not store creds. here
    $host = 'fillupthedb_mariaDb_1';
    $db   = 'database';
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

/**
 * @return string
 */
function createData() : string
{
    $data  = ",('a')";
    $data2 = '';

    for ($i=0; $i < 2500000; $i++) {
        $data2 .= $data;
    }

    return $data2;
}