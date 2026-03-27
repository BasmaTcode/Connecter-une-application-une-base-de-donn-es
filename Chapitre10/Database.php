<?php
// had class kateamlna connexion b database
class database {
    private $host = "localhost"; // ism dial server
    private $dbname = "solidb"; // ism dial database
    private $username = "root"; // des infos dial connexion f mysql
    private $password = "";

    public $conn; // variable ghadi nkhaznu feh connexion PDO

    public function getConnection(){ // hadi fonction kateamlna connexion b database
    $this->conn = null;// kanfrgho l connexion bash nbdaw mn jdid

    try{
        $this->conn = new PDO( // kaneadlu connexion jdida b base donees u kankhaznuha f varibale
            "mysql:host={$this->host};dbname={$this->dbname};charset=utf8", // DSN (Data Source Name) kietinades infos ela type dial database , server ...
            $this->username, // ism user f MySQL
            $this->password ); // password dial user f MySQL
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //had star kitlaelna les erreurs dial database
    }
    catch(PDOException $e){
        echo"Erreur de connexion:" . $e->getMessage(); // ida wqae erreur f connexion kitlaena message dl erreur
    }
    return $this->conn; // kanrejeu connexion PDO ida wqae erreur
    }

    }


?>
