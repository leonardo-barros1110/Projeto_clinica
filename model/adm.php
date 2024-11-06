<?php
require_once '../config/database.php';

class Adm {
    private $conn;
    private $table_name = "adminstrador";
    public $nome;
    public $departamento;
    public $telefone;
    public $email;
    public $endereco;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    } 

    public function cadastrarAdm() {
        $query = "INSERT INTO " . $this->table_name . " (nome, data_nascimento, cpf, convenio, telefone, email) VALUES (:nome, :data_nascimento, :cpf, :convenio, :telefone, :email)";
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":depatamento", $this->departamento);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":email", $this->email);
    
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