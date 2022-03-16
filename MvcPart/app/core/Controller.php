<?php
    class Controller
    {
        
        
        public $conn = null;

        private $dbType = DB_TYPE;
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        private $error;
        private $statement;
        private $dbHandler;

        public function __construct()
        {
            try
            {
                $this->openSqlConnection();
            }
            catch (PDOException $e) 
            {
                $this->error = $e->getMessage();
                exit('Sql connection error : ' . $this->error);
            }
            //print_r("Salut din constructor Controller");
        }
        
        //Deschidem conexiunea sql
        private function openSqlConnection()
        {
            // sql connection with PDO connector http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
            $conn = $this->dbType . ':host=' . $this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_PERSISTENT, true,
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            $this->conn = new PDO($conn , $this->dbUser, $this->dbPass, $options);
            //$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        /* Nu am reusit sa inteleg cum sa folosesc varianta asta
        //Pentru a putea scrie query sql
        public function query($sql)
        {
            $this->statement = $this->conn->prepare($sql);
        }

        public function bind($parameter , $value , $type = null)
        {
            switch(is_null($type))
            {
                case(is_int($value)):
                    $type = PDO::PARAM_INT;
                    break;
                case(is_bool($value)):
                    $type = PDO::PARAM_BOOL;
                    break;
                case(is_null($value)):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                $type = PDO::PARAM_STR;
            }
            $this->statement->bindValue($parameter , $value , $type);
        }

        //Executam statemntul preparat
        public function execute()
        {
            return $this->statement->execute();
        }

        // returneaza un array de randuri ca obiect
        public function resultSet()
        {
            $this->execute();
            return $this->statement->featchAll(PDO::FETCH_ASSOC);
        }

        // returneaza un singur rand ca obiect
        public function single()
        {
            $this->execute();
            return $this->statement->featch(PDO::FETCH_ASSOC);
        }

        // returneaza numarul de randuri
        public function rowCount()
        {
            return $this->statement->rowCount(PDO::FETCH_ASSOC);
        }
        */
        public function model($model)
        {
            require_once __DIR__ . '/../models/' . $model . '.php';
            return new $model;
        }
        
        # Incarca view-ul si verifica daca exista 
        public function view($view, $data = [])
        {
            if(file_exists(__DIR__ . '/../views/' . $view . '.php'))
            {
                require_once __DIR__ . '/../views/' . $view . '.php';
            }
            else
            {
                die("View does not exist");
            }
        }

    }

?>