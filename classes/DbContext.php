<?php

class DbContext{
    private static $_instance = null;
    public $_pdo,
    $_query,
    $_error = false,
    $_results;

    private function __construct($database)
    {
         $this->_pdo = new PDO("mysql:host=localhost;dbname=$database;charset=UTF8", 'root', 'nawwar123');
    }
    
    public static function getInstance($database = 'Charity')
    {
        if(!isset(self::$_instance)){
            self::$_instance = new DbContext($database);
        }
        return self::$_instance;
    }
    
    public function query($sql, $params = array())
    {
        $this->_error = FALSE;
        if($this->_query = $this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)){
                foreach ($params as $param) {
                    $this->_query->bindValue($x, $param);
                    $x++;
                }
            }
            if($this->_query->execute()){
                $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
            } else {
                $this->_error = TRUE;
            }
        }
        return $this;
    }
    
    public function results() {
        return $this->_results;
    }
    
    public function first() {
        if ($this->count() > 0) {
            return $this->results()[0];
        } else {
            return NULL;
        }
    }
    
    public function error() {
        return $this->_error;
    }
    
    public function count() {
        return $this->_query->rowCount();
    }

    public function lastId() {
        return $this->_pdo->lastInsertId();
    }
}