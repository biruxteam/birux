<?php
    //use Tracy\Debugger;
    $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'], '.env');
    $dotenv->load();
    /*if ($_ENV['DEBUG'] === 'false') {
        Debugger::enable(Debugger::PRODUCTION);
        Debugger::$logSeverity = E_ERROR;
        Debugger::$showBar = false;
    } else {
        Debugger::enable();
        Debugger::$logSeverity = E_ERROR;
        Debugger::$showBar = true;
    }*/


class DB {

        private static function connect() {
                $pdo = new PDO('mysql:host='.$_ENV['MYSQL_HOST'].';dbname='.$_ENV['MYSQL_DB'].';charset=utf8mb4', ''.$_ENV['MYSQL_NAME'].'', ''.$_ENV['MYSQL_PASSWORD'].'');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
        }

        public static function query($query, $params = array()) {
                $statement = self::connect()->prepare($query);
                $statement->execute($params);

                if (explode(' ', $query)[0] == 'SELECT') {
                $data = $statement->fetchAll();
                return $data;
                }
        }

}

