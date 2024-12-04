<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="../img/icone.png" type="image/x-icon">
    <title>Pacientes Cadastrados</title>
</head>
<style>
body, h1, table, th, td, p, a, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #444;
}

table {
    width: 100%;
    max-width: 800px;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    overflow-x: auto;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 10px;
    text-align: left;
    font-size: 14px;
}

th {
    background-color: #f4f4f4;
    font-weight: bold;
    color: #555;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

button {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #c82333;
}

p {
    font-size: 16px;
    color: #666;
    text-align: center;
}

</style>
<body>
    <h1>Pacientes Cadastrados</h1>


    <?php if (!empty($pacientes)): ?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
                <th>Convênio</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?php echo htmlspecialchars($paciente['nome']); ?></td>
                <td><?php echo htmlspecialchars($paciente['data_nascimento']); ?></td>
                <td><?php echo htmlspecialchars($paciente['cpf']); ?></td>
                <td><?php echo htmlspecialchars($paciente['convenio']); ?></td>
                <td><?php echo htmlspecialchars($paciente['endereco']); ?></td>
                <td><?php echo htmlspecialchars($paciente['telefone']); ?></td>
                <td><?php echo htmlspecialchars($paciente['email']); ?></td>
                <td><a href="/Projeto_clinica/views/paginas/update-paciente/<?php echo $paciente['cpf']; ?>">Atualizar</a></td>
             <?php echo $paciente['cpf']; ?>">Atualizar</a></td>
            <td><form action="/Projeto_clinica/views/paginas/pipi/excluir-paciente" method="POST" style="display:inline;">
                <input type="hidden" name="cpf" value="<?php echo $paciente['cpf']; ?>">
                <button type="submit">Excluir</button>
            </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
    <?php else: ?>
        <p>Nenhum paciente cadastrado.</p>
    <?php endif; ?>
</body>
</html>
