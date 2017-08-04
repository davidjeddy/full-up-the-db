<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('max_execution_time', '300'); //300 seconds = 5 minutes

// vars
$counter = 0;
$max = 2147483648;

// conn to DB
$pdo = connect();

// truncate table
$pdo->prepare("TRUNCATE signed;")->execute();

$startTime = microtime(true);
// loop till max reached
while ($counter < $max) {

//    // output timing every 10k rows
//    if (($counter % 10000) === 0) {
//        echo "$counter rows in ". (microtime(true) - $startTime) ." seconds.\n";
//    }

    try {
        $pdo->prepare("INSERT INTO signed(value) VALUES('a')")->execute();
    } catch (PDOException $e) {
        echo "Elapsed time is: ". ((microtime(true) - $startTime) *4) ." seconds.\n";

        throw new \Exception($e->getMessage());
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
