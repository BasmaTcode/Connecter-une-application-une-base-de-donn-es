<?php
class user {
    private $conn ; // connecion b database , emlnahum prv bash maytbdlush mn barra
    private $table = "utilisateur"; // ism table f database

    public $id; //  hadu les infos dial user , emlnahum public bash n9dro nstaemluhum mn barra
    public$name;
    public $email; 

public function __construct($db){ // hna kankhazno connexion b database f constructor bash n9dro nstaemluh f les methodes
    $this->conn = $db; // hna kanakhdu connexion b database u kankhaznuh f variable dial class


}
    // create
public function create(){
      $sql = "INSERT INTO {$this->table} (nom, email) VALUES (:nom, :email)"; // hna kan3tiw requete SQL bash nzidu user,kanqulu l databse zidna uahd user
      $stmt = $this->conn->prepare($sql); // hna kanwjdu query bash nkhdmuh mn baed , u bash tprotegina mn les infections SQL
    return $stmt->execute([ 'nom' => $this->nom,'email' => $this->email]); // hna kanexecute query u kan3tiw les valeurs dial nom u email bash ytzadu f database

    // read
}
public function read(){
        $sql = "SELECT * FROM {$this->table}"; // hna kan3tiw requete SQL bash njibou les users kamlin mn database
        $stmt = $this->conn->query($sql); // hna emlna query hit makaynashi donees dial user bash nprotegewhum b prepare 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // hna kanfetchiw results u kanrejeuha f format associative array 
    }
    // update
   public function update() {
        $sql = "UPDATE {$this->table} SET nom=:nom, email=:email WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['nom' => $this->nom, 'email' => $this->email, 'id' => $this->id]);
    }  
        // DELETE
    public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $this->id]); 

}

}