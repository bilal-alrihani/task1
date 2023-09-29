<?php
 class DBconnctions
{
    public static function dbfunc()
    {
        try {
            return new PDO('mysql:host=localhost,dname=bookstore', 'root', '');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
