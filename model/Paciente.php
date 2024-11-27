<?php
require_once '../config/database.php';

class Paciente {
    private $conn;
    private $table_name = "paciente";
    
    public $nome;
    public $convenio;
    public $cpf;
    public $telefone;
    public $email;
    public $data_nascimento;
    public $endereco;
    
    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    } 


    public function cadastrarPac() {
        $query = "INSERT INTO " . $this->table_name . " (nome, data_nascimento, cpf, convenio, telefone, email, endereco) VALUES (:nome, :data_nascimento, :cpf, :convenio, :telefone, :email, :endereco)";
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":data_nascimento", $this->data_nascimento);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":convenio", $this->convenio);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":endereco", $this->endereco);
    
        if ($stmt->execute()) {
            return true;
        }
        else{

        return false;
        }
}
   
public function getAll() {
    $query = "SELECT * FROM " . $this->table_name;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}


}

?>
