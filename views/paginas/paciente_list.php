<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Cadastrados</title>
</head>
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
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Nenhum paciente cadastrado.</p>
    <?php endif; ?>
</body>
</html>
