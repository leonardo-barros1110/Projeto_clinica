<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro  </title>
</head>
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

    <input type="submit" value="Atualizar Livro">
    
</form>

<a href="/projeto_clinica/views/paginas/paciente_list">Voltar para a lista</a>

</body>
</html>
