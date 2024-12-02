<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro  </title>
</head>
<style>
/* Reset básico */
body, h1, form, input, label, a {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo geral da página */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 20px;
}

h1 {
    text-align: center;
    color: #444;
    margin-bottom: 20px;
}

form {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 400px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="number"],
input[type="hidden"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

input[type="submit"] {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #218838;
}

a {
    display: block;
    margin-top: 15px;
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    text-decoration: underline;
}


</style>
<body>

<h1>Atualizar Cadastro</h1>
<form action="/Projeto_clinica/public/pipi/update-paciente" method="POST">
    <input type="hidden" name="id" value="<?php echo $pacientes['cpf']; ?>">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?php echo $pacientes['nome']; ?>" required><br><br>

    <label for="data_nascimento">data_nascimento:</label>
    <input type="text" id="data_nascimento" name="data_nascimento" value="<?php echo $pacientes['data_nascimento']; ?>" required><br><br>

    <label for="cpf">CPF:</label>
    <input type="number" id="cpf" name="cpf" value="<?php echo $pacientes['cpf']; ?>" required><br><br>

    <label for="convenio">convenio:</label>
    <input type="text" id="convenio" name="convenio" value="<?php echo $pacientes['convenio']; ?>"><br><br>

    <label for="convenio">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo $pacientes['email']; ?>"><br><br>

    <label for="endereco">Endereco (R$):</label>
    <input type="text" step="0.01" id="endereco" name="endereco" value="<?php echo $pacientes['endereco']; ?>" required><br><br>

    <label for="telefone">Telefone (R$):</label>
    <input type="number" step="0.01" id="telefone" name="telefone" value="<?php echo $pacientes['telefone']; ?>" required><br><br>

    <input type="submit" value="Atualizar Dados">
    
</form>

<a href="/projeto_clinica/views/paginas/paciente_list">Voltar para a lista</a>

</body>
</html>
