<?php

class Database{

    //paramètres de connection à la BD
    private $host = "localhost";
    private $username = "root";
    private $password = '';
    private $dbname = 'cda_contact';

    //variable qui contiendra la connexion à la BD
    private $link;

    private function connect(){
          $this->link = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    }

    //lorsqu'on instanciera la class Database, automatiquement une connexion s'effectuera avec la DB, grâce au constructeur
    public function __construct()
    {
        $this->connect();
    }

    public function insert($query){
        $result = $this->link->query($query);
        if ($result) {
            echo "<h2> Formulaire envoyé avec succès</h2>";
        } else {
            echo "<h2> Echec de l'envoi </h2>";
        }
        
    }

    public function create($query){
        $result = $this->link->query($query);
    }

    public function update($query){
        $result = $this->link->query($query);
    }

    public function delete($query){
        $result = $this->link->query($query);
    }
  

    /**
     * Get the value of host
     */ 
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @return  self
     */ 
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of dbname
     */ 
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * Set the value of dbname
     *
     * @return  self
     */ 
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;

        return $this;
    }
}

