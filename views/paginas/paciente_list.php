<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes cadastrados</title>
</head>

<h1>Pacientes cadastros</h1>

<?php if (empty($paciente)): ?>
    <p>nenhum paciente.</p>

<?php else : ?>

    <table border="1">
    <tr>
        <th>Nomes</th>
        <th>Data</th>
        <th>Cpf</th>
        <th>Convênio</th>
        <th>Endereço</th>
        <th>Telefone</th>
        <th>Email</th>
    </tr>
    <?php foreach ($pacientes as $paciente): ?>
    <tr>
        <td><?php echo htmlspecialchars ($paciente['nome']); ?></td>
        <td><?php echo htmlspecialchars ($paciente['data_nascimeto']); ?></td>
        <td><?php echo  htmlspecialchars ($paciente['cpf']); ?></td>
        <td><?php echo  htmlspecialchars ($paciente['convenio']); ?></td>
        <td><?php echo  htmlspecialchars ($paciente['endereco']); ?></td>
        <td><?php echo  htmlspecialchars ($paciente['telefone']); ?></td>
        <td><?php echo  htmlspecialchars ($paciente['email']); ?></td>

    </tr>
    <?php endforeach; ?>
</table>
<?php endif;?>

<a href="/meu_projeto_livraria/public">Cadastrar novo livro</a>

</body>
</html>
