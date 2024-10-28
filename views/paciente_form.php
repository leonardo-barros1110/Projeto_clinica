<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Paciente</title>
</head>
<body>
    <h2>Cadastro de Paciente</h2>
    <form action="index.php?controller=PacienteController&action=cadastrarPaciente" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br>

        <label for="data_nascimento">Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" id="data_nascimento" required><br>

        <label for="cpf">CPF:</label><br>
        <input type="text" name="cpf" id="cpf" required><br>

        <label for="convenio">Convênio:</label><br>
        <input type="text" name="convenio" id="convenio"><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" name="telefone" id="telefone" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
