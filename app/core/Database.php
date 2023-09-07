<?php
class Database
{
    // Set database
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    private $databaseHandler, $statement;

    // Connection
    public function __construct()
    {
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];

        try {
            $this->databaseHandler = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Query
    public function query($query)
    {
        $this->statement = $this->databaseHandler->prepare($query);
    }

    // Binding
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->statement->bindValue($param, $value, $type);
    }

    // Execute statement
    public function execute()
    {
        $this->statement->execute();
    }

    // Return array of data
    public function resultAll()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Return single data
    public function resultSingle()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // Return row count
    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}