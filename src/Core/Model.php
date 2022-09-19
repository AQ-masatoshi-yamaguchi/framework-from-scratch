<?php

namespace Core;

use PDO;
use PDOException;

/**
 * Base model
 *
 * PHP version 5.4
 */
abstract class Model
{

    /**
     * Get the PDO database connection
     *
     * @return \PDO|null
     */
    protected static function getDB(): ?PDO
    {
        static $db = null;

        if ($db === null) {
            $host = 'framework_db';
            $dbname = 'database';
            $username = 'mysql';
            $password = 'password';

            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                              $username, $password);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return $db;
    }
}
