<?php

class db {

    private $dbName;
    private $dbConn;
    private $query;

    public function open($database, $username = 'root', $password = '', $hostname = '127.0.0.1', $hostport = '3306')
    {
        $this->dbName = $database;
        $this->dbConn = mysql_connect($hostname . ":" . $hostport, $username, $password);
        if (!$this->dbConn) {
            die('Critical Stop Error: Database Error<br />' . mysql_error());
        }
        mysql_select_db($this->dbName, $this->dbConn);
    }

    public function qry($sql)
    {
        $this->query = mysql_query($sql, $this->dbConn) OR die(mysql_error());
        return $this->query;
    }

    public function fetch_assoc($query = nil)
    {
        if ($query == nil) {
            $query = $this->query;
        }
        return mysql_fetch_assoc($query);
    }


}

