<?php

class DB
{
    const u_admin="store_admin", p_admin="admin"; // MYSQL account used by the admin
    const u_client="store_client", p_client="client"; // MYSQL account used by all app users

    public static function connect($user, $password) {
        $db='mysql:host=localhost;dbname=store';
        try {
<<<<<<< HEAD
            $connection = new PDO($db, $user, $password);
=======
            $connection=new PDO($db, $user, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
>>>>>>> 6fb10f6d0322560f97cda91cc85ec6da75cc3a65
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $connection;
    }
}