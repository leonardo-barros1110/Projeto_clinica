<?php
require_once 'config/database.php';

class Paciente {
    private $conn;
    private $table = 'pacientes';
    public $nome;
    public $data_nascimento;
    public $cpf;
    public $convenio;
    public $telefone;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function cadastrar() {
        $query = "INSERT INTO " . $this->table . " (nome, data_nascimento, cpf, convenio, telefone) VALUES (:nome, :data_nascimento, :cpf, :convenio, :telefone)";
        $stmt = $this->conn->prepare($query);

        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->data_nascimento = htmlspecialchars(strip_tags($this->data_nascimento));
        $this->cpf = htmlspecialchars(strip_tags($this->cpf));
        $this->convenio = htmlspecialchars(strip_tags($this->convenio));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":data_nascimento", $this->data_nascimento);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":convenio", $this->convenio);
        $stmt->bindParam(":telefone", $this->telefone);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
