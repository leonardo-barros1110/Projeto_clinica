<?php
require_once '../config/database.php';

class medico {
    private $conn;
    private $table_name = "medico";
    
    public $nome;
    public $email;
    public $crm;
    public $especialidade;
    public $telefone;
    public $endereco;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function cadastrarMed() {
        $query = "INSERT INTO " . $this->table_name . " (nome, email, crm, especialidade, telefone, endereco) VALUES (:nome, :email, :crm, :especialidade, :telefone, :endereco)";
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":crm", $this->crm);
        $stmt->bindParam(":especialidade", $this->especialidade);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":endereco", $this->endereco);
    
        if ($stmt->execute()) {
            return true;
        }
        else{

        return false;
        }
}
    public function getall() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>