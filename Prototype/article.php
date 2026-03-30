<?php
class article { // hna aneadlo modele dyal article
    private $conn; // variable khazna feh connexion dial database , emlnahum private bash maytbdlush mn barra u gher class article li t9der tstaemlo
    private $table = "articles"; // ism dial table f database

    public $id; // hadu les infos dial article , emlnahum public bash n9dro nstaemluhum mn barra
    public $title;
    public $content;

    public function __construct($db) { 
        $this->conn = $db; // kanrbto objet dialna b database
    }

    
    public function create() {
        
        $query = "INSERT INTO " . $this->table . " (title, content) VALUES (:title, :content)"; // hna kan3tiw requete SQL bash nzidu article,kanqulu l databse zidna uahd article
        
        $stmt = $this->conn->prepare($query); // hna kanwjdu query bash nkhdmuh mn baed , u bash tprotegina mn les injections SQL

        $stmt->bindParam(":title", $this->title); // hna kanrbto lvalues dial title u content mea query , hit f query lfuq eamlin gher placeholders khasna neamlo bindparam bash ytrbto b variables
        $stmt->bindParam(":content", $this->content);

        return $stmt->execute(); // hna kanexecuteiw query u kanrejeha true ila t9der tzid article u false ila kayn chi mouchkil
    }

    
    public function read() {
        $query = "SELECT * FROM " . $this->table; // hna kan3tiw requete SQL bash njibou les articles kamlin mn database
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;

    }
}