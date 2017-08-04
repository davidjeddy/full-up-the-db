<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('max_execution_time', '60'); //60 seconds = 1 minutes

// vars
$counter = 0;
$max = 2147483648;

// conn to DB
$pdo = connect();

// truncate table
$pdo->prepare("TRUNCATE signed;")->execute();

$data = ",('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')
,('a'),('b'),('c'),('d'),('e')";

# 10 * X =
for ($i=0; $i < 10; $i++) {
    $data .= $data;
}

// loop till max reached
while ($counter < $max) {
    try {
        $pdo->prepare("INSERT INTO signed(value) VALUES ('a'),('b'),('c'),('d'),('e')$data")->execute();
    } catch (PDOException $e) {
        throw new \Exception($e->getMessage());
    }

    if ($counter >= $max) {
        exit(0);
    }

    $counter++;
}

echo 'Opps: Did not get a PDO exception.';

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
