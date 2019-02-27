<?php
    class db{
        // Properties
        private $dbhost = '192.168.1.250';
		//private $dbhost = '181.224.247.138';
        private $dbuser = 'sa';
        private $dbpass = '';
		//private $dbpass = 'C1rc0l0';
        private $dbname = 'BDCSI';

        // Connect
        public function connect(){
            //$mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $mysql_connect_str = "sqlsrv:server=$this->dbhost,1298;Database=$this->dbname";			
			//$mysql_connect_str = "sqlsrv:server=$this->dbhost,1433;Database=$this->dbname";			
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }