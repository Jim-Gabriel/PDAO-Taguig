<?php
    class Database {
        private $dbHost;
        private $dbUser;
        private $dbPass;
        private $dbName;
        private $dbPort;

        private $statement;
        private $dbHandler;
        private $error;

        public function __construct($hosting = null) {

            $this->dbHost = DBHOST;
            $this->dbUser = DBUSER;
            $this->dbPass = DBPASS;
            $this->dbName = DBNAME;
            $this->dbPort = DBPORT;

            
                $conn = 'mysql:host=' . $this->dbHost .';dbname=' . $this->dbName;


            /*
            if($_SERVER['SERVER_NAME'] == 'localhost'){
                $conn = 'mysql:host=' . $this->dbHost .';dbname=' . $this->dbName;
           
            }else{
                $conn = 'mysql:host=' . $this->dbHost  .';port=' .$this->dbPort .';dbname=' . $this->dbName;
           
            }
            */
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function error(){
            return $this->error;
        }

        //Allows us to write queries
        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        //Bind values
        public function bind($parameter, $value, $type = null) {
            switch (is_null($type)) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
            $this->statement->bindValue($parameter, $value, $type);
        }
        public function execute() {
            return $this->statement->execute();
        }

        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }
        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }
        public function rowCount() {
            return $this->statement->rowCount();
        }
        public function lastInsertId(){
            return $this->dbHandler->lastInsertId();
        }
        
        public function beginTransaction(){
            return $this->dbHandler->beginTransaction();
        }
        
        public function endTransaction(){
            return $this->dbHandler->commit();
        }
        
        public function cancelTransaction(){
            return $this->dbHandler->rollBack();
        }
        
        public function debugDumpParams(){
            return $this->statement->debugDumpParams();
        }
        
        public function close(){
          $this->dbHandler = null;
        }
    }
